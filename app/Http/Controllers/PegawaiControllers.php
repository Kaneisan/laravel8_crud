<?php

namespace App\Http\Controllers;

use App\Models\Pegawais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

class PegawaiControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais = Pegawais::paginate(5);
        return view('pegawais.index', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $image =  $request->file('image')->store('images', 'public');
        }
        $pegawais = new  Pegawais;
        $pegawais->nip = $request->input('nip');
        $pegawais->nama = $request->input('nama');
        $pegawais->tempatlahir = $request->input('tempatlahir');
        $pegawais->alamat = $request->input('alamat');
        // $pegawais->tgllahir = $request->input('tgllahir');
        $pegawais->tgllahir = date('Y-m-d', strtotime($request->input('tgllahir')));
        $pegawais->kelamin = $request->input('kelamin');
        $pegawais->gol = $request->input('gol');
        $pegawais->eselon = $request->input('eselon');
        $pegawais->jabatan = $request->input('jabatan');
        $pegawais->tempattugas = $request->input('tempattugas');
        $pegawais->agama = $request->input('agama');
        $pegawais->unitkerja = $request->input('unitkerja');
        $pegawais->nohp = $request->input('nohp');
        $pegawais->npwp = $request->input('npwp');
        $pegawais->image = $image;
        $pegawais->save();
        return redirect('/pegawais')->with('status', 'Pegawai Berhasil ditambah');
        // return back()->with('success', 'Pegawai Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawais  $pegawais
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawais $pegawais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawais  $pegawais
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawais = Pegawais::find($id);
        return view('pegawais.edit', compact('pegawais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawais  $pegawais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pegawais = Pegawais::find($id);
        $pegawais = new  Pegawais;
        $pegawais->nip = $request->input('nip');
        $pegawais->nama = $request->input('nama');
        $pegawais->tempatlahir = $request->input('tempatlahir');
        $pegawais->alamat = $request->input('alamat');
        // $pegawais->tgllahir = $request->input('tgllahir');
        $pegawais->tgllahir = date('Y-m-d', strtotime($request->input('tgllahir')));
        $pegawais->kelamin = $request->input('kelamin');
        $pegawais->gol = $request->input('gol');
        $pegawais->eselon = $request->input('eselon');
        $pegawais->jabatan = $request->input('jabatan');
        $pegawais->tempattugas = $request->input('tempattugas');
        $pegawais->agama = $request->input('agama');
        $pegawais->unitkerja = $request->input('unitkerja');
        $pegawais->nohp = $request->input('nohp');
        $pegawais->npwp = $request->input('npwp');

        // if (
        //     $pegawais->featured_image &&
        //     file_exists(storage_path('app/public/' . $pegawais->image))
        // ) {
        //     Storage::delete('public/' . $pegawais->featured_image);
        // }
        // $image_name = $request->file('image')->store('images', 'public');
        // $pegawais->image = $image_name;

        if ($pegawais->image && file_exists(storage_path('app/public' . $pegawais->image))) {
            Storage::delete('public/' . $pegawais->image);
        }
        $pegawais_image_name = $request->file('image')->store('images', 'public');
        $pegawais->image = $pegawais_image_name;
        $pegawais->update();
        return redirect('/pegawais')->with('status', 'Pegawai Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawais  $pegawais
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawais $pegawais)
    {
        $pegawais->delete();

        return redirect()->route('pegawais.index')
            ->with('success', 'pegawai deleted successfully');
    }

    
}

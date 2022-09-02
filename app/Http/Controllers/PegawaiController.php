<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawais;
use PDF;
class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cetak_pdf()
    {
        $pegawais = Pegawais::all();
        $pdf = PDF::loadview('pegawais.pdf', ['pegawais' => $pegawais]);
        return $pdf->stream();
    }
}

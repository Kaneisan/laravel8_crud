@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            @if(session('status'))
            <div class="alert alert-sccuess">{{ session('status')}}</div>
            @endif
            <div class="card-header">{{ __('Data Pegawai PNS') }} </div>
            <div class="col-sm-2"><br>
                <a href="{{url('pegawais/create')}}" type="button" class="btn btn-primary">Tambah Data</a>
                <a href="/pegawai/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>

            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <table id="example" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Alamat</th>
                                <th>Tgl Lahir</th>
                                <th>L/P</th>
                                <th>Gol</th>
                                <th>Eselon</th>
                                <th>Jabatan</th>
                                <th>Tempat Tugas</th>
                                <th>Agama</th>
                                <th>Unit Kerja</th>
                                <th>No. Hp</th>
                                <th>NPWP</th>
                                <th>Profile</th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawais as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->nip}}</td>
                                <td>{{$p->nama}}</td>
                                <td>{{$p->tempatlahir}}</td>
                                <td>{{$p->alamat}}</td>
                                <td>{{$p->tgllahir}}</td>
                                <td>{{$p->kelamin}}</td>
                                <td>{{$p->gol}}</td>
                                <td>{{$p->eselon}}</td>
                                <td>{{$p->jabatan}}</td>
                                <td>{{$p->tempattugas}}</td>
                                <td>{{$p->agama}}</td>
                                <td>{{$p->unitkerja}}</td>
                                <td>{{$p->nohp}}</td>
                                <td>{{$p->npwp}}</td>
                                <td><img width="50px" src="{{asset('storage/'.$p->image)}}"></td>
                                <td>
                                    <a href="{{ url('pegawais/'.$p->id.'/edit')}}" class="badge bg-warning">Edit</button>
                                </td>
                                <td>
                                    <a href="{{ url('pegawais/delete')}}" type="button" class="badge bg-danger">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$pegawais->appends(Request::all())->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
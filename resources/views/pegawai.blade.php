@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
                <div class="card-header">{{ __('Data Pegawai PNS') }} </div>
                <div class="col-sm-2"><br><button type="button" class="btn btn-secondary">Tambah Data</button></div>
                <div class="card-body">
                <table class="table table-bordered">
                <table id="example" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
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
                                <th colspan="2" >Aksi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($Pegawai as $p)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$p->NIP}}</td>
                                <td>{{$p->Nama}}</td>
                                <td>{{$p->Tempatlahir}}</td>
                                <td>{{$p->Alamat}}</td>
                                <td>{{$p->Tgllahir}}</td>
                                <td>{{$p->Tgllahir}}</td>
                                <td>{{$p->Gol}}</td>
                                <td>{{$p->Eselon}}</td>
                                <td>{{$p->Jabatan}}</td>
                                <td>{{$p->Tempattugas}}</td>
                                <td>{{$p->Agama}}</td>
                                <td>{{$p->Unitkerja}}</td>
                                <td>{{$p->Nohp}}</td>
                                <td>{{$p->NPWP}}</td>
                                <td><button type="button" class="badge bg-warning">Warning</button></td>
                                <td><button type="button" class="badge bg-danger">Danger</button></td>
                                <td><button type="button" class="badge bg-danger">Danger</button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection

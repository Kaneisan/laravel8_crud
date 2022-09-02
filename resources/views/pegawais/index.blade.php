@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            @if(session('status'))
            <div class="alert alert-sccuess">{{ session('status')}}</div>
            @endif
            <div class="card-header">{{ __('Data Pegawai PNS') }} </div>
            <div class="col-md-4"><br>
                <div class="col-md-4">
                    <!-- <form action="/pegawais" method="GET">
                        <input type="carinama" name="carinama" class="form-control" aria-describedby="passwordHelpInline" placeholder="Cari Nama">
                    </form>
                    <form action="/pegawais" method="GET">
                        <input type="cariunitkerja" name="cariunitkerja" class="form-control" aria-describedby="passwordHelpInline" placeholder="Cari Unit Kerja" style="margin: top 2px; ">
                    </form> -->
                </div>
                <a href="{{url('pegawais/create')}}" type="button" class="btn btn-primary">Tambah Data</a>
                <a href="/pegawai/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>

                <div class="col g-3 align-items-center">

                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered cell-border" id="example">
                    <thead>
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
                            <th style="text-align: center;">Aksi</th>
                            <th></th>
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
                                <form action="{{ url('pegawais/'.$p->id)}}"  method="POST">
                                    @csrf
                                    @method('DELETE') 
                                    <button type="submit" class="badge bg-danger">Delete</a>
                                </form>
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
@push('custom-js')
<script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
</script>
@endpush
@endsection
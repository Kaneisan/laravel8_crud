@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card-header">{{ __('Add Data Pegawai PNS') }} </div>
            <br>
            <a href="{{ url('pegawais') }}" type="button" class="btn btn-secondary">Back</a>
            <div class="card-body">
                <br>
                <form action="{{ url('pegawais') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group ">
                        <label for="exampleInputEmail1">NIP</label>
                        <input type="text" class="form-control" name="nip">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempatlahir">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <div class="form-group">
                            <div class='input-group date'>
                                <input type='date' class="form-control" name="tgllahir"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="kelamin">Pilih Jenis Kelamin</label>
                        <div class="col">
                            <input type="radio" name="kelamin" value="L">
                            <label for="age1">Laki-Laki</label><br>
                            <input type="radio" name="kelamin" value="P">
                            <label for="age2">Perempuan</label><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gol">Gol</label>
                        <input type="text" class="form-control" name="gol">
                    </div>
                    <div class="form-group">
                        <label for="eselon">Eselon</label>
                        <input type="text" class="form-control" name="eselon">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan">
                    </div>
                    <div class="form-group">
                        <label for="tempattugas">Tempat Tugas</label>
                        <input type="text" class="form-control" name="tempattugas">
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" name="agama">
                    </div>
                    <div class="form-group">
                        <label for="unitkerja">Unit Kerja</label>
                        <input type="text" class="form-control" name="unitkerja">
                    </div>
                    <div class="form-group">
                        <label for="nohp">No. Hp</label>
                        <input type="text" class="form-control" name="nohp">
                    </div>
                    <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="text" class="form-control" name="npwp">
                    </div>
                    <div class="form-group">
                        <label for="image">Profile</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
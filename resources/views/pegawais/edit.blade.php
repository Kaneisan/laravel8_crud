@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="col"><br>
                <a href="{{url('pegawais')}}" type="button" class="btn btn-secondary">Back</a>
            </div>
            <div class="card-header">{{ __('Edit Data Pegawai PNS') }} </div>

            <div class="card-body">
                <form action="{{ url('pegawais/'.$pegawais->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIP</label>
                        <input type="text" class="form-control" name="nip" value="{{ $pegawais->nip}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ $pegawais->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempatlahir" value="{{ $pegawais->tempatlahir}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $pegawais->tempatlahir}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker'>
                                <input type='date' class="form-control" name="tgllahir" value="{{ $pegawais->tgllahir}}" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kelamin">Pilih Jenis Kelamin</label>
                        <div class="col">
                            <input type="hidden" name="kelamin" value="{{$pegawais->kelamin}}">
                            <input type="radio" name="kelamin" value="L" {{ $pegawais->kelamin == 'L' ? 'checked' : '' }}>
                            <label for="age1">Laki-Laki</label><br>
                            <input type="radio" name="kelamin" value="P" {{ $pegawais->kelamin == 'P' ? 'checked' : '' }}>
                            <label for="age2">Perempuan</label><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gol">Gol</label>
                        <input type="text" class="form-control" name="gol" value="{{ $pegawais->gol}}">
                    </div>
                    <div class="form-group">
                        <label for="eselon">Eselon</label>
                        <input type="text" class="form-control" name="eselon" value="{{ $pegawais->eselon}}">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" value="{{ $pegawais->jabatan}}">
                    </div>
                    <div class="form-group">
                        <label for="tempattugas">Tempat Tugas</label>
                        <input type="text" class="form-control" name="tempattugas" value="{{ $pegawais->tempattugas}}">
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" name="agama" value="{{ $pegawais->agama}}">
                    </div>
                    <div class="form-group">
                        <label for="unitkerja">Unit Kerja</label>
                        <input type="text" class="form-control" name="unitkerja" value="{{ $pegawais->unitkerja}}">
                    </div>
                    <div class="form-group">
                        <label for="nohp">No. Hp</label>
                        <input type="text" class="form-control" name="nohp" value="{{ $pegawais->nohp}}">
                    </div>
                    <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="text" class="form-control" name="npwp" value="{{ $pegawais->npwp}}">
                    </div>
                    <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="text" class="form-control" name="npwp" value="{{ $pegawais->npwp}}">
                    </div>
                    <div class="form-group">
                        <label for="image">Profile</label>
                        <input type="file" class="form-control" name="image" value="{{ $pegawais->image}}">
                        <img width="150px" src="{{asset('storage/'.$pegawais->image)}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
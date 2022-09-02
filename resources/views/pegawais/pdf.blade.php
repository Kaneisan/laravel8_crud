<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Data Pegawai</h4>
    </center>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Id</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Alamat</th>
                <th>Tgl Lahir</th>
                <th>Kelamin</th>
                <th>Gol</th>
                <th>Eselon</th>
                <th>Jabatan</th>
                <th>Tempat Tugas</th>
                <th>Agama</th>
                <th>Unit Kerja</th>
                <th>No. Hp</th>
                <th>NPWP</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
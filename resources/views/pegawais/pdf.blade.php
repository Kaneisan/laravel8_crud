<!doctype html>
<html lang="en">

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <table class='table table-striped'>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
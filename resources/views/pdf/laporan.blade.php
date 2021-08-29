<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Peserta</title>
</head>
<body>
    <h1>Laporan Peserta PPDB</h1>
    <table style="width: 100%;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Asal Sekolah</th>
                <th>Jurusan</th>           
            </tr>
        </thead>
        <tbody>
            
            <?php $i=1 ?>
            @foreach($data as $item)
            <tr>
                <td>{{$i}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->asal_sekolah}}</td>
                <td>{{$item->jurusan->jurusan}}</td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
</body>
</html>
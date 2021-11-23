<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
    <h1>Passing data dari controller ke view</h1>
    <li><a href="{{ route('add') }}">Edit Dosen</a></li>
    <br>
    <p>Nama: {{ $nama }}</p>
    <p>Jurusan: {{ $alamat }}</p>
    <p>Mata Kuliah</p>
    <ul>
        @foreach($mtkl as $mkl)
            <li>{{ $mkl }}</li>
        @endforeach
    </ul>
</body>
</html>
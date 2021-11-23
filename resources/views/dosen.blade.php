<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <h1>Passing data dari controller ke view</h1>
    <li><a href="{{ route('add') }}"/>Tambah</a></li>
    <p>Nama: {{ $data }}</p>
    <p>Jurusan: {{ $jurusan }}</p>
    <p>Mata Kuliah</p>
    <ul>
        @foreach($mtkl as $mkl)
            <li>{{ $mkl }}</li>
        @endforeach
    </ul>
</body>
</html>
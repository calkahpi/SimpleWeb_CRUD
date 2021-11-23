<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
<li><a href="{{ route('dosenlist') }}">Kembali</a></li>
    <br>
    <form action="{{ route ('save') }}" method="post">
        @csrf
        Nama <input type="text" name="nama" id="nama"><br>
        Alamat <input type="text" name="alamat" id="alamat"><br>
        Phone <input type="number" name="phone" id="phone"><br>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>
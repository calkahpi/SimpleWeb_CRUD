<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit Dosen</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Edit Dosen
                    <form action="/dosen1/{{$dsn1->id}}/update" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <a style="font-size:23px; font-weight:600">NIP</a>
                            <input type="text" name="nip" id="nip" class="form-control" value="{{$dsn1->nip}}">
                        </div>
                        <div class="form-group">
                            <a style="font-size:23px; font-weight:600">Nama Dosen</a>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{$dsn1->nama}}">
                        </div>
                        <div class="form-group">
                            <a style="font-size:23px; font-weight:600">Nomor Telepon</a>
                            <input type="text" name="telepon" id="telepon" class="form-control" value="{{$dsn1->telepon}}">
                        </div>
                        <div class="form-group">
                            <a style="font-size:23px; font-weight:600">Email</a>
                            <input type="text" name="email" id="email" class="form-control" value="{{$dsn1->email}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>

                <div class="links">
                </div>
            </div>
        </div>
    </body>
</html>

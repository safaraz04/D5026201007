<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Rambla:wght@700&family=Readex+Pro:wght@500&display=swap" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous">
</script>
<script src="easy-number-separator.js"></script>

    <style>
        .center{
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 25px;

        }
        h2{
            font-family: 'Readex Pro', sans-serif;
        }
        </style>


</head>

<body>

    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%" >
            <h3 class="w3-bar-item">Menu</h3>
            <a href="/pegawai" class="w3-bar-item w3-button">Pegawai</a>
            <a href="/absen" class="w3-bar-item w3-button">Absen</a>
            <a href="#" class="w3-bar-item w3-button">Minggu Depan</a>
            <a href="/sepeda" class="w3-bar-item w3-button">Praktikum</a>
    </div>

    <div style="margin-left:15%">
        <header>
            <div class="w3-container w3-blue-grey">
            <div class="row">
                <div class="col-lg-2">
                    <img src="{{asset('image/foto.jpg')}}" width="100px" height="100px" class="center">
                </div>

                <div class="col-lg-10">
                    <h2>Faraz Nurdini</h2>
                    <h4>5026201007</h4>
                </div>
            </div>
            </div>
        </header>
     <div class="w3-container">


        @yield('judulhalaman')<br>
        @section('konten')
        @show

<br>
<br>
<br>
        <footer>Hak Cipta Oleh <b>5026201007 - Faraz Nurdini</b></footer>
     </div>

    </div>
</div>


</body>

</html>

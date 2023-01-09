<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi  - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
            overflow-x: hidden;
        }
        </style>
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="navbar-dark bg-dark">
        <div class="p-4 pt-5">
            <img class="img logo rounded-circle mb-5 align-center" style="width:80px;" src="{{ asset('photo.png') }}" alt="">
            <a class="navbar-brand" href="http://janganmalas.id:8000">Moh Hasyim Baidlowi</a><br>
            <a class="navbar-brand">502620103</a><br>
                <ul class="list-unstyled components mb-5">
                  <li>
                      <a href="/pegawai">Pegawai</a>
                  </li>
                  <li>
                      <a href="/absen">Absen</a>
                  </li>
                  <li>
                      <a href="/keyboard">Keyboard</a>
                  </li>
                </ul>


        </div>
    </nav>
    <div class="container my-5">
        <br>
        @yield('judulhalaman')
        <br>

        <br>
        @section('konten')
        @show
    </div>

    <footer class="navbar navbar-dark bg-dark fixed-bottom sticky-footer">
        <div class="my-auto">
            <div class="my-auto copyright"><span class="nav-link">Hak Cipta Hasyim 2021</span></div>
        </div>
    </footer>


</body>

</html>

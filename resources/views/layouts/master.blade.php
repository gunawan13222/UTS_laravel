<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="/asets/css/bootstrap.min.css">
  <title>{{ $title }}</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">

          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarCenteredExample"
            aria-controls="navbarCenteredExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarCenteredExample">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ ($title === "pegawai") ? 'active' : '' }}" aria-current="page" href="/pegawai">PRODUK</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "kebutuhan") ? 'active' : '' }}" href="/kebutuhan">KEBUTUHAN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "pic") ? 'active' : '' }}" href="/pic">PIC</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "kategori") ? 'active' : '' }}" href="/kategori">KATEGORI</a>
              </li>
          </div>
        </div>
      </nav>
<br>
  @yield('konten')
   <footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
        <div class="text-center p-3" style="background-color: #0d6efd;">
          teknik informatika | © 2020 STMIK lombok
        </div>
    </footer>
</body>
</html>
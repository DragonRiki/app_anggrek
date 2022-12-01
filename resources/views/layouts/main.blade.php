<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Anggrek | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <center>
      <h1>Perhimpunan Anggrek Indonesia </br> Cabang Kediri Raya </h1> 
    </center>
    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Galeri") ? 'active' : '' }}" href="/">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Member") ? 'active' : '' }}" href="/">Member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Kontak Kami") ? 'active' : '' }}" href="/">Kontak Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login">Login</a>
        </li>
      </ul>
    <div class="container mt-4">
        @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
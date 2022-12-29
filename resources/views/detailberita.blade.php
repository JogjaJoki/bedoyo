
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>{{ $berita->judul }}</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sticky-footer-navbar/">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="manifest" href="./manifest.json">
    <meta name="theme-color" content="#712cf9">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
  </head>
  <body class="d-flex flex-column h-100">
    

<header>
  <!-- setting navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
    <div class="container-lg">
      <img  src="{{ asset('img/logo.png') }}" width="50">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dasbor">BERANDA</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="/profil">PROFIL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/pelayanan">PELAYANAN</a>
          </li>
                    <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/berita">BERITA</a>
          </li>
                    <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/kontak_kami">KONTAK KAMI</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<main style="margin-top : 8%" class="container ">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark bg-secondary">
    <div class="col-md-6 px-0">
      <h1 class="display-4 ">KONTAK PELAYANAN KALURAHAN BEDOYO</h1>
      <p class="lead my-3">Infomasi pelayanan dan keluhan bisa menghubungi admin Kalurahan Bedoyo Kapenawon Ponjong Kabupaten Gunungkidul melalui kontak di bawah.</p>
    </div>
  </div>
<div class="container my-5 "  > 
  <h1 style="margin-bottom : 5%" class="text-center">{{ $berita->judul }}</h1>
  <img style="margin-left : 10%" src="{{ asset('images/berita/' . $berita->photo) }}" width="80%" >
    <p style="margin-top : 4%">{{ $berita->isi }}</p>
    </div>
  </div>
</main>
<footer class="footer mt-auto py-3 bg-success">
  <div class="container">
   <span class="mb-3 mb-md-0 text-white">&copy; 2022 Singgih Dewandaru, In</span>
  </div>
</footer>
  </body>
</html>

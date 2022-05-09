<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/fontawesome-free-6.1.1-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/fontawesome-free-6.1.1-web/css/all.css">

    <title>Page <?= $data['judul']; ?></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top pe-5 ps-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASEURL; ?>/Home/">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse float-end flex-row-reverse" id="navbarNavDropdown">
      <div class="nav nav-pills">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= BASEURL; ?>/About/">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/daftar/">Daftar Siswa</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Surat
            </a>
            <ul class="dropdown-menu" style="right: 80px;" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?= BASEURL;?>/surat/masuk/">Masuk</a></li>
              <li><a class="dropdown-item" href="<?= BASEURL;?>/surat/keluar/">Keluar</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class=" mb-5" style="height:60px;">&nbsp;</div>

    


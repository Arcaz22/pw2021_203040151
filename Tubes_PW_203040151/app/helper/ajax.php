<?php
require 'functions.php';
$books = cari($_GET['keyword']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ajax</title>
</head>

<body>

  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropend">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../../assets/img/nophoto.jpg" width="40" height="40" class="rounded-circle">
              </a>
              <ul class="dropdown-menu">
                <li class="fs-3">
                  <a class="dropdown-item font-monospace fst-italic" href="#">
                    User
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../crud/logout.php">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <form action="" method="POST">
          <input type="text" name="keyword" placeholder="  Search.." class="keyword rounded-pill" autocomplete="off">
          <button type="submit" name="cari" class="tombol-cari rounded-circle"><i class='bx bx-search-alt-2'></i></button>
        </form>
      </div>
    </nav>
  </div>

  <?php if (empty($books)) : ?>
    <div class="container my-5">
      <div class="p-5 mb-3 bg-light rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold text-center">Buku <br> Tidak <br> Ditemukan!</h1>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php foreach ($books as $book) : ?>
    <div class="col-xl-6">
      <div class="card overflow-hidden my-2">
        <div class="card-body cleartfix">
          <button class="btn btn-info rounded-pill" style="font-family: 'Montserrat', sans-serif;"><?= $book['genre']; ?></button>
          <div class="col-xl-12">
            <div class="card m-3">
              <div class="row g-1">
                <div class="col-md-4">
                  <img src="../../assets/img/<?= $book['gambar']; ?>" width="150">
                </div>
                <div class="col-md-8 py-3">
                  <div class="card-body">
                    <h2 class="card-title"><?= $book['judul']; ?></h2>
                    <h6 class="card-text"><?= $book['pengarang']; ?></h6>
                    <p class="card-price fs-6 text-decoration-underline"><span class="fs-5 fw-bold">Rp. </span><?= $book['harga']; ?></p>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="../crud/ubah.php?id=<?= $book["id"]; ?>"><button class="btn btn-outline-dark rounded-pill">Ubah</button></a>
                  <a href="../crud/hapus.php?id=<?= $book["id"]; ?>" onclick="return confirm('yakin?');"><button class="btn btn-outline-secondary rounded-pill">Hapus</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
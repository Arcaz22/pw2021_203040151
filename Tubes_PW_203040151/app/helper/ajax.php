<?php
// Chandra Arcychan Azfar
// 203040151
// Jum'at 13.00
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
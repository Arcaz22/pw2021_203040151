<?php
session_start();

require '../helper/functions.php';

//pagination
//konfigurasi
$jumlahDataPerHalaman = 4;
$jumlahData = count(query("SELECT * FROM book"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$books = query("SELECT * FROM book LIMIT $awalData, $jumlahDataPerHalaman");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>
  <link rel="stylesheet" href="../../assets/boostrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../../assets/mycss/user.css">
  <link rel="stylesheet" href="../../assets/mycss/all.css">
</head>

<body>

  <section class="min-vh-100">
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
                  <li><a class="dropdown-item" href="#"></a></li>
                  <li><a class="dropdown-item" href="../crud/login.php"><i class="fas fa-sign-in-alt"></i> Sign In</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Log Out <i class="fas fa-sign-out-alt"></i></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <main>
      <div class="gallery size mt-3">
        <div class="container" style="margin-top: -3.5rem;">
          <a href="../../../index.php"><i class="fas fa-arrow-left"></i></a>
          <div class="row gy-2 row-cols-1 row-cols-sm-2 row-cols-md-4">
            <?php foreach ($books as $book) : ?>
              <div class="col">
                <a href="detail.php?id=<?= $book['id']; ?>">
                  <img src="../../assets/img/<?= $book['gambar']; ?>" class="gallery item">
                </a>
              </div>
            <?php endforeach;  ?>
          </div>
          <nav name="pagination" class="m-4">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled border rounded-pill">
                <?php if ($halamanAktif > 1) : ?>
                  <a style="text-decoration: none;" href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                  <?php if ($i == $halamanAktif) : ?>
                    <a class="fw-bold text-white" style="text-decoration: none;" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                  <?php else : ?>
                    <a style="text-decoration: none;" class="border" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                  <?php endif; ?>
                <?php endfor; ?>

                <?php if ($halamanAktif < $jumlahHalaman) : ?>
                  <a style="text-decoration: none;" class="" href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
                <?php endif; ?>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </main>

    <?php include '../helper/footer.php'; ?>
  </section>

  <script src="../../assets/boostrap/js/bootstrap.min.js"></script>
  <script src="../../assets/myjs/java.js"></script>
</body>

</html>
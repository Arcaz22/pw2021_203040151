<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: ../crud/login.php");
}

require '../helper/functions.php';


//pagination
//konfigurasi
$jumlahDataPerHalaman = 4;
$jumlahData = count(query("SELECT * FROM book"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$books = query("SELECT * FROM book LIMIT $awalData, $jumlahDataPerHalaman");

if (isset($_POST['cari'])) {
  $books = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="../../assets/boostrap/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../../assets/mycss/all.css">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">

</head>

<body style="font-family: 'Old Standard TT' , serif;">


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

  <main>
    <section class="min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="add my-2 btn btn-outline-danger rounded-pill" style="width:170px" ;>
              <a href="../crud/tambah.php" style="text-decoration:none;color:#000;">Tambah Data</a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
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
        </div>
        <nav name="pagination" class="mt-2">
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
                <a style="text-decoration: none;" href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
              <?php endif; ?>
            </li>
          </ul>
        </nav>

    </section>
  </main>

  <?php include '../helper/footer.php';  ?>

  <script src="../../assets/boostrap/js/bootstrap.min.js"></script>
  <script src="../../assets/myjs/java.js"></script>
  <script src="../../assets/myjs/ajax.js"></script>
</body>

</html>
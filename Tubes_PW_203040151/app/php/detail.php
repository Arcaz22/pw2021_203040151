<?php
// Chandra Arcychan Azfar
// 203040151
// Jum'at 13.00
session_start();
require '../helper/functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$book = query("SELECT * FROM book WHERE id = $id");

if (isset($_POST['add'])) {
  print_r($_POST['product']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
  <link rel="stylesheet" href="../../assets/boostrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/mycss/all.css">
  <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
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
      <div class="container my-5 mx-auto">
        <div class="row g-0">
          <div class="col-lg-4 mb-4 mx-auto">
            <figure class="figure">
              <img src="../../assets/img/<?= $book['gambar']; ?>" width="300" class="gallery-item">
            </figure>
          </div>
          <div class="col-lg-6 mx-auto">
            <div class="py-5">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <a href="user.php"><i class="fas fa-arrow-left"></i></a>
                    <h6 class="text-light"><?= $book['genre']; ?></h6>
                    <h1 class="fw-bold"><?= $book['judul']; ?></h1>
                    <h3><span class="text-danger">by</span> <?= $book['pengarang']; ?></h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus dolorum voluptatum, ullam unde alias odio similique corrupti, id fugiat perspiciatis eligendi, repellat reprehenderit! Veniam animi saepe, nam aliquid commodi nobis dolores, vel voluptatibus aut esse ratione cum asperiores debitis repellendus blanditiis itaque officiis enim tenetur quaerat quisquam minima exercitationem. Dolorum?</p>
                    <h4 class="text-white"><span>Rp : </span><?= $book['harga']; ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php include '../helper/footer.php'; ?>
  </section>

  <script src="../../assets/boostrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php
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
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
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
                <li><a class="dropdown-item" href="#"></a></li>
                <li><a class="dropdown-item" href="../crud/login.php">Sign In</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <main>
    <section style="margin-top: -38px;font-family: 'Montserrat', sans-serif;">
      <div class="container my-5 mx-auto">
        <div class="row">
          <div class="col-lg-4 mx-auto">
            <figure class="figure">
              <img src="../../assets/img/<?= $book['gambar']; ?>" width="300" class="gallery-item">
            </figure>
          </div>
          <div class="col-lg-6 mx-auto">
            <div class="py-5">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <a href="user.php"><i class='bx bx-arrow-back'></i></a>
                    <h6><?= $book['genre']; ?></h6>
                    <h1 class="fw-bold"><?= $book['judul']; ?></h1>
                    <h3><span class="fw-bold">by</span> <?= $book['pengarang']; ?></h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus dolorum voluptatum, ullam unde alias odio similique corrupti, id fugiat perspiciatis eligendi, repellat reprehenderit! Veniam animi saepe, nam aliquid commodi nobis dolores, vel voluptatibus aut esse ratione cum asperiores debitis repellendus blanditiis itaque officiis enim tenetur quaerat quisquam minima exercitationem. Dolorum?</p>
                    <h4><span class="fw-bold">Rp : </span><?= $book['harga']; ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include '../helper/footer.php'; ?>

  <script src="../../assets/boostrap/js/bootstrap.min.js"></script>
</body>

</html>
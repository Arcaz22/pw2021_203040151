<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require '../helper/functions.php';

$user = query("SELECT * FROM host");

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = '../admin/admin.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <link rel="stylesheet" href="../../assets/boostrap/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../../assets/mycss/all.css">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body style="font-family: 'Montserrat', sans-serif;">

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
                <li class="fs-3"><a class="dropdown-item font-monospace fst-italic" href="#">User</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../crud/logout.php">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>


  <div class="container my-3">
    <div class="row">
      <div class="card overflow-hidden">
        <div class="card-body cleartfix">
          <div class="col-xl-12 mt-3">


            <a href="../admin/admin.php"><i class='bx bx-arrow-back'></i></a>
            <form action="" method="POST" enctype="multipart/form-data" class="row g-3">
              <div class="col-md-6">
                <label for="inputJudul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" required>
              </div>
              <div class="col-md-6">
                <label for="inputGenre" class="form-label">Genre</label>
                <select class="form-select" name="genre" required>
                  <option selected>Choose...</option>
                  <option>Inspiration</option>
                  <option>Romance</option>
                  <option>Sci-fi</option>
                  <option>Thriller</option>
                </select>
              </div>
              <div class="col-12">
                <label for="inputPengarang" class="form-label">Pengarang</label>
                <input type="text" class="form-control" name="pengarang" required>
              </div>
              <div class="col-12">
                <label for="inputHarga" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" required>
              </div>
              <div class="col-md-6">
                <label for="inputGambar" class="form-label">Gambar</label>
                <input type="file" class="form-control gambar" name="gambar" onchange="previewImage()">
                <button type="submit" class="btn btn-primary my-4" name="tambah">Tambah Data</button>
              </div>
              <div class="col-md-6">
                <img src="../../assets/img/nophoto.jpg" width="105" class="img-preview">
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include '../helper/footer.php'; ?>

  <script src="../../assets/boostrap/js/bootstrap.min.js"></script>
  <script src="../../assets/myjs/java.js"></script>
</body>

</html>
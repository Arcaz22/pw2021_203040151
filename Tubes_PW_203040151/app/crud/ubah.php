<?php
// Chandra Arcychan Azfar
// 203040151
// Jum'at 13.00
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require '../helper/functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: ../admin/admin.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$user = query("SELECT * FROM host");
$book = query("SELECT * FROM book WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = '../admin/admin.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data</title>
  <link rel="stylesheet" href="../../assets/boostrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../../assets/mycss/all.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body style="font-family: 'Montserrat', sans-serif;">

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
                  <li class="fs-3"><a class="dropdown-item font-monospace fst-italic" href="#"><i class="fas fa-user"></i> User</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="../crud/logout.php">Log Out <i class="fas fa-sign-out-alt"></i></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="container my-3">
      <div class="row">
        <div class="card overflow-hidden" style="margin-top: 3rem;">
          <div class="card-body cleartfix">
            <div class="col-xl-12 mt-3">

              <a href="../admin/admin.php"><i class="fas fa-arrow-left"></i></a>
              <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $book['id']; ?>">
                <div class="col-md-6">
                  <label for="inputJudul" class="form-label">Judul</label>
                  <input type="text" class="form-control" name="judul" required value="<?= $book["judul"]; ?>">
                </div>
                <div class="col-md-6">
                  <label for="inputgenre" class="form-label">Genre</label>
                  <select class="form-select" name="genre" value="<?= $book["genre"]; ?>" required>
                    <option>Inspiration</option>
                    <option>Romance</option>
                    <option>Sci-fi</option>
                    <option>Thriller</option>
                  </select>
                </div>
                <div class="col-12">
                  <label for="inputPengarang" class="form-label">Pengarang</label>
                  <input type="text" class="form-control pengarang" name="pengarang" required value="<?= $book["pengarang"]; ?>">
                </div>
                <div class="col-12">
                  <label for="inputHarga" class="form-label">Harga</label>
                  <input type="text" class="form-control" name="harga" required value="<?= $book["harga"]; ?>">
                </div>
                <div class="col-md-6">
                  <input type="hidden" name="gambar_lama" value="<?= $book["gambar"]; ?>">
                  <label for="inputGambar" class="form-label">Gambar</label>
                  <input type="file" class="form-control gambar" name="gambar" onchange="previewImage()">
                  <button type="submit" class="btn btn-primary my-4" name="ubah">Ubah Data</button>
                </div>
                <div class="col-md-6">
                  <img src="../../assets/img/<?= $book['gambar']; ?>" width="105" class="img-preview">
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include '../helper/footer.php'; ?>

  <script src="../../assets/boostrap/js/bootstrap.min.js"></script>
  <script src="../../assets/myjs/java.js"></script>
</body>

</html>
<?php
/*
    Chandra Arcychan Azfar
    203040151
    Jumat,13.00
*/
?>

<?php
//Menghubungkan dengan file phplainnya
require 'functions.php';
//Melakukan query dari database
$books = query("SELECT * FROM data");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan5c</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="card mt-5">
      <div class="card-body">
        <h1 class="display-4">NOVEL</h1>

        <div class="add mb-3 btn btn-outline-primary rounded-pill" style="width:170px" ;>
          <a href="tambah.php" style="text-decoration:none;color:#000;">Tambah Data</a>
        </div>

        <table id="table" class="table table-bordered table-striped table-hover text-center">
          <thead>
            <tr>
              <th>NO</th>
              <th>Gambar</th>
              <th>Judul</th>
              <th>Pengarang</th>
              <th>Terbit</th>
              <th>Dimensi</th>
              <th>ISBN</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1 ?>
            <?php foreach ($books as $row) : ?>
              <tr>
                <th scope="row"><?= $i ?></th>
                <td><img src="../assets/gambar/<?= $row["gambar"]; ?>"></td>
                <td><?= $row["Judul"] ?></td>
                <td><?= $row["Pengarang"] ?></td>
                <td><?= $row["Terbit"] ?></td>
                <td><?= $row["Dimensi"] ?></td>
                <td><?= $row["ISBN"] ?></td>
                <td>
                  <a href="ubah.php?id=<?= $row["id"]; ?>"><button class="btn btn-outline-primary rounded-pill">Ubah</button></a>
                  <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');"><button class="btn btn-outline-danger rounded-pill">Hapus</button></a>
                </td>
              </tr>
              <?php $i++ ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>

</html>
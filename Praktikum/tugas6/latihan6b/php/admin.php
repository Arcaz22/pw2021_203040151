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

//ketika tombol cari di klik
if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $books = query("SELECT * FROM data
      WHERE
    Judul LIKE '%$keyword%' OR
    Pengarang LIKE '%$keyword%' OR
    Terbit LIKE '%$keyword%' OR
    Dimensi LIKE '%$keyword%' OR
    ISBN LIKE '%$keyword%' 
    ");
} else {
  $books = query("SELECT * FROM data");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan6b</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="card mt-5">
      <div class="card-body">
        <h1 class="display-4">NOVEL</h1>

        <div class="add mb-3 btn btn-outline-primary rounded-pill" style="width:170px" ;>
          <a href="tambah.php" style="text-decoration:none;color:#000;">Tambah Data</a>
        </div>

        <form action="" method="get" style="float: right;">
          <input type="text" name="keyword" size="30" class="rounded-pill" placeholder="Cari Di sini!" autofocus>
          <button type="submit" name="cari" class="btn btn-outline-success rounded-pill">Cari!</button>
        </form>

        <div class="logout">
          <a href="logout.php">Logout</a>
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
            <?php if (empty($books)) : ?>
              <tr>
                <td colspan="9">
                  <h1>Data tidak ditemukan</h1>
                </td>
              </tr>
            <?php else : ?>
              <?php $i = 1 ?>
              <?php foreach ($books as $row) : ?>
                <tr>
                  <td scope="row"><?= $i ?></td>
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
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>
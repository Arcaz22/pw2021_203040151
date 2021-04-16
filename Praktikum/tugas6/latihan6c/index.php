<?php
/*
    Chandra Arcychan Azfar
    203040151
    Jumat,13.00
*/
?>

<?php
//Menghubungkan dengan file phplainnya
require 'php/functions.php';
//Melakukan query dari database
$books = query("SELECT * FROM data");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan5b</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>

<body>

  <div class="container mt-3">
    <h1>NOVEL</h1>
    <a href="php/login.php">
      <button type="">Masuk ke Halaman Admin</button>
    </a>
    <div class="card" style="width: 150px">
      <div class="card-body">
        <div class="row">
          <div class="col md-6">
            <?php foreach ($books as $row) : ?>
              <p class="judul">
                <a href="php/detail.php?id=<?= $row['id'] ?>">
                  <img src="assets/gambar/<?= $row["gambar"]; ?>">
                </a>
              </p>
            <?php endforeach;  ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
<?php
/*
    Chandra Arcychan Azfar
    203040151
    Jumat,13.00
*/
?>

<?php
//mengecek apakah  ada id yang di kirimkan
//jika tidak maka akan di kembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

//Mengambil id dari url
$id = $_GET['id'];

//melakukan query dengan parameter id yang di ambil dari url 
$row = query("SELECT * FROM data WHERE id= $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/deskripsi.css">

</head>

<body>
    <div class="container col-md-12 row justify-content-center">
        <div class="card" style="max-width: 500px;">
            <div class=" card-body">
                <h1>Novel</h1>
                <div class="card border border-primary" style="max-width: 500px;">
                    <div class="row no-gutters">
                        <div class="col-md-4 mt-4 px-4 w-50 p-3 mx-auto d-block">
                            <img src="../assets/gambar/<?= $row["gambar"]; ?>" class="card-img border border-dark img-thumbnail">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title m-1"><?= $row["Judul"] ?></h5>
                                <ul>
                                    <li class="card-text"><?= $row["Pengarang"] ?></li>
                                    <li class="card-text"><?= $row["Dimensi"] ?></li>
                                    <li class="card-text"><?= $row["ISBN"] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="tombol-kembali btn btn-outline-primary mb-3">
                <a href="../index.php" style="text-decoration: none; color:black;">kembali</a>
            </button>
        </div>
    </div>
</body>

</html>
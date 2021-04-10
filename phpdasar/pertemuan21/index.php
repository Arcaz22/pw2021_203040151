<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
} 

//Menguhungkan ke function
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari di tekan 
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keywoard"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loader {
            width: 100px;
            position: absolute;
            top: 100px;
            left: 330px;
            z-index: -1;
            display: none;
        }

        @media print {
            .logout,.tambah,.aksi,.form {
                display:none;
            }
        }
    </style>
</head>
<body>

<a href="logout.php" class="logout">Logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php" class="tambah">Tambah data mahasiswa</a>
<br><br>

<form method="post" action="" class="form">

    <input type="text" name="keywoard" size="40" autofocus placeholder="masukkan keywoard pencarian.." autocomplete="off" id="keywoard">
    <button type="submit" name="cari" id="tombol-cari">Cari!</button>

    <img src="img/loader.gif" class="loader">

<form>

<br>
<div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th class="aksi">Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ( $mahasiswa as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td class="aksi">
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nrp"] ; ?></td>
            <td><?= $row["nama"] ; ?></td>
            <td><?= $row["email"] ; ?></td>
            <td><?= $row["jurusan"] ; ?></td>
        </tr
        <?php $i++; ?>>
        <?php endforeach; ?>
    </table>
</div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
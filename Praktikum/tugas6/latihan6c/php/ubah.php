<?php
/*
    Chandra Arcychan Azfar
    203040151
    Jumat,13.00
*/
?>

<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data buku berdasarkan id
$row = query("SELECT * FROM data WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil di ubahkan atau tidak
    if (ubah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'admin.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'admin.php';
			</script>
		";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Buku</title>
    <link rel="stylesheet" href="../assets/css/form.css">
</head>

<body>

    <div class="form">
        <h1>Form Ubah Data Buku</h1>

        <form method="post" action="">
            <ul>
                <input type="hidden" name="id" id="id" value="<?= $row['id']; ?>">
                <li>
                    <label for="gambar">Gambar : </label> <br>
                    <input type="file" name="gambar" id="gambar" required value="<?= $row["gambar"]; ?>"><br>
                </li>
                <li>
                    <label for="judul">Judul : </label>
                    <input type="text" name="Judul" id="judul" required value="<?= $row["Judul"]; ?>"><br>
                </li>
                <li>
                    <label for="pengarang">Pengarang : </label>
                    <input type="text" name="Pengarang" id="pengarang" required value="<?= $row["Pengarang"]; ?>"><br>
                </li>
                <li>
                    <label for="terbit">Terbit : </label>
                    <input type="date" name="Terbit" id="terbit" required value="<?= $row["Terbit"]; ?>"><br>
                </li>
                <li>
                    <label for="dimensi">Dimensi : </label>
                    <input type="text" name="Dimensi" id="dimensi" required value="<?= $row["Dimensi"]; ?>"><br>
                <li>
                    <label for="isbn">ISBN : </label>
                    <input type="text" name="ISBN" id="ISBN" required value="<?= $row["ISBN"]; ?>"><br>
                </li>
                <li>
                    <button type="submit" name="ubah">Ubah Data!</button>
                    <button type="submit">
                        <a href="../index.php" style="text-decoration: none; color:black;">Kembali</a>
                    </button>
                </li>
            </ul>
        </form>
    </div>

</body>

</html>
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

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["tambah"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'admin.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('data gagal ditambahkan!');
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
        <h1>Form Tambah Data Buku</h1>

        <form method="post" action="">
            <ul>
                <li>
                    <label for="gambar">Gambar : </label> <br>
                    <input type="file" name="gambar" id="gambar" required><br>
                </li>
                <li>
                    <label for="judul">Judul : </label>
                    <input type="text" name="Judul" id="judul" required><br>
                </li>
                <li>
                    <label for="pengarang">Pengarang : </label>
                    <input type="text" name="Pengarang" id="pengarang" required><br>
                </li>
                <li>
                    <label for="terbit">Terbit : </label>
                    <input type="date" name="Terbit" id="terbit" required><br>
                </li>
                <li>
                    <label for="dimensi">Dimensi : </label>
                    <input type="text" name="Dimensi" id="dimensi" required><br>
                </li>
                <li>
                    <label for="isbn">ISBN : </label>
                    <input type="text" name="ISBN" id="ISBN" required><br>
                </li>
                <li>
                    <button type="submit" name="tambah">Tambah Data!</button>
                    <button type="submit">
                        <a href="../index.php" style="text-decoration: none; color:black;">Kembali</a>
                    </button>
                </li>
            </ul>
        </form>
    </div>

</body>

</html>
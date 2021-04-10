<?php
/* 
    Chandra Arcychan Azfar
    203040151
    github.com/Arcaz22/pw2021_203040151
    Pertemuan 5( 9 Februari 2021 )
    Materi Minggu ini mempelajari mengenai Array
*/
?>

<?php
$mahasiswa = [
    ["Chandra Arcychan Azfar", "203040151", "TIF", "chandraarcychan@gmail.com"],
    ["Leonardo Rmadani", "203040152", "TI", "LRtI@gmail.com"],
    ["Satrio Wega", "203040153", "TM", "SWtM@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>
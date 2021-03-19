<?php
/*
    Chandra Arcychan Azfar
    203040151
    Jumat,13.00
*/
?>

<?php 
$books = [
    [
        "Judul" => "SELENA",
        "Pengarang" => "Tere Liye",
        "Terbit" => "16 Maret 2020",
        "Dimensi" => "368 halaman",
        "ISBN" => "9786020639512",
        "gambar" => "i.png"
    ],
    [
        "Judul" => "Misteri Terakhir #1",
        "Pengarang" => "S. Mara Gd",
        "Terbit" => "06 Apr 2020",
        "Dimensi" => "448 Halaman",
        "ISBN" => "9786020637112",
        "gambar" => "f.png"
    ],
    [
        "Judul" => "Nebula",
        "Pengarang" => "Tere Liye",
        "Terbit" => "16 Maret 2020",
        "Dimensi" => "376 halaman",
        "ISBN" => "9786020639536",
        "gambar" => "g.png"
    ],
    [
        "Judul" => "After the Funeral",
        "Pengarang" => "Agatha Christie",
        "Terbit" => "27 Desember 2017",
        "Dimensi" => "336 halaman",
        "ISBN" => "9789792234343",
        "gambar" => "a.png"
    ],
    [
        "Judul" => "Ganjil Genap",
        "Pengarang" => "Almira Bastari",
        "Terbit" => "03 Februari 2020",
        "Dimensi" => "344 halaman",
        "ISBN" => "9786020638010",
        "gambar" => "e.png"
    ],
    [
        "Judul" => "Tokyo & Perayaan",
        "Pengarang" => "Ruth Pricilia Angelinae",
        "Terbit" => "13 April 2020",
        "Dimensi" => "208 halaman",
        "ISBN" => "9786020640853",
        "gambar" => "j.png"
    ],
    [
        "Judul" => "Segi Tiga",
        "Pengarang" => "Sapardi Djoko Damono",
        "Terbit" => "29 Maret 2020",
        "Dimensi" => "328 halaman",
        "ISBN" => "9786020639246",
        "gambar" => "h.png"
    ],
    [
        "Judul" => "Ibuk",
        "Pengarang" => "Iwan Setyawan",
        "Terbit" => "06 Februari 2013",
        "Dimensi" => "289 halaman",
        "ISBN" => "9786020329987",
        "gambar" => "c.png"
    ],
    [
        "Judul" => "Laut Bercerita",
        "Pengarang" => "Leila S. Chudori",
        "Terbit" => "21 Desember 2017",
        "Dimensi" => "379 halaman",
        "ISBN" => "9786024246945",
        "gambar" => "d.png"
    ],
    [
        "Judul" => "Defending Jacob",
        "Pengarang" => "William Landay",
        "Terbit" => "30 Januari 2019",
        "Dimensi" => "484 halaman",
        "ISBN" => "9786020451558",
        "gambar" => "b.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3e</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover text-center">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Gambar</th>
      <th scope="col">Judul</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Terbit</th>
      <th scope="col">Dimensi</th>
      <th scope="col">ISBN</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php foreach($books as $book) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><img src="gambar/<?= $book["gambar"]; ?>"></td>
      <td><?= $book["Judul"] ?></td>
      <td><?= $book["Pengarang"] ?></td>
      <td><?= $book["Terbit"] ?></td>
      <td><?= $book["Dimensi"] ?></td>
      <td><?= $book["ISBN"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</body>
</html>
<?php
/* 
    Chandra Arcychan Azfar
    203040151
    github.com/Arcaz22/pw2021_203040151
    Pertemuan 6( 14 Februari 2021 )
    Materi Minggu ini mempelajari mengenai Associative Array
*/
?>
<?php
$books = [
    [
        "Judul" => "SELENA",
        "Pengarang" => "Tere Liye",
        "Terbit" => "2020",
        "Dimensi" => "368 halaman",
        "ISBN" => "9786020639512",
        "gambar" => "i.png"
    ],
    [
        "Judul" => "Misteri Terakhir #1",
        "Pengarang" => "S. Mara Gd",
        "Terbit" => "6 Apr 2020",
        "Dimensi" => "448 Halaman",
        "ISBN" => "9786020637112",
        "gambar" => "f.png"
    ],
    [
        "Judul" => "Nebula",
        "Pengarang" => "Tere Liye",
        "Terbit" => "2020",
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
        "Terbit" => "Februari 2020",
        "Dimensi" => "344 halaman",
        "ISBN" => "-",
        "gambar" => "e.png"
    ],
    [
        "Judul" => "Tokyo & Perayaan",
        "Pengarang" => "Ruth Pricilia Angelinae",
        "Terbit" => "2020",
        "Dimensi" => "208 halaman",
        "ISBN" => "9786020640853",
        "gambar" => "j.png"
    ],
    [
        "Judul" => "Segi Tiga",
        "Pengarang" => "Sapardi Djoko Damono",
        "Terbit" => "Maret 2020",
        "Dimensi" => "328 halaman",
        "ISBN" => "9786020639246",
        "gambar" => "h.png"
    ],
    [
        "Judul" => "Ibuk",
        "Pengarang" => "Iwan Setyawan",
        "Terbit" => "2017",
        "Dimensi" => "289 halaman",
        "ISBN" => "9786020329987",
        "gambar" => "c.png"
    ],
    [
        "Judul" => "Laut Bercerita",
        "Pengarang" => "Leila S. Chudori",
        "Terbit" => "Desember 2017",
        "Dimensi" => "379 halaman",
        "ISBN" => "-",
        "gambar" => "d.png"
    ],
    [
        "Judul" => "Defending Jacob",
        "Pengarang" => "William Landay",
        "Terbit" => "Desember 2017",
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
    <title>Latihan Array</title>
    <style>
        html, body {
            display: flex;
            flex-direction: row;
            text-align: center;
        }
        li {
            list-style: none;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.1rem; 
        }
        img{
            width: 450px;
            height: 450px;
        }
        h1 {
            margin-bottom: 285px;
            padding: 50px;
            border-right: 2px dotted black;
        }
    </style>
</head>

<body>
<h1>Best Seller Novel April 2020</h1>
    <?php foreach ( $books as $book ) : ?>
            <ul>
                <li>
                    <img src="img/<?= $book["gambar"]; ?>">
                </li>
                <li>Judul : <?= $book["Judul"]; ?></li>
                <li>Pengarang : <?= $book["Pengarang"]; ?></li>  
                <li>Terbit : <?= $book["Terbit"]; ?></li>
                <li>Dimensi : <?= $book["Dimensi"]; ?></li>
                <li>ISBN : <?= $book["ISBN"]; ?></li>
            </ul>
<?php endforeach; ?>

</body>
</html>


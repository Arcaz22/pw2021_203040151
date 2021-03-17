<?php 

$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Foreach</title>
</head>
<body>
    
    <?php 
        foreach ($nama as $absen) {//Foreach akan otomatis  menampilkan isi Array
            echo "<li>$absen</li>";
        }
    ?>
</body>
</html>
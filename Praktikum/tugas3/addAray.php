<?php 

$hari = ["Senin", "Selasa"];

print_r($hari);
echo "</br>";
$hari[] = "Rabu"; //Menambahkan elemen pada urutan terakhir array
print_r($hari);
echo "</br>";
$hari[3] = "Kamis"; //Menambahkan elemen pada index yang kita atentukan.
                    //Jika Index sudah terisi, maka elemen lama akan
                    //di ganti dengan element baru
print_r($hari)
?>
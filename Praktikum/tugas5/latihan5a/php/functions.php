<?php
/*
    Chandra Arcychan Azfar
    203040151
    Jumat,13.00
*/
?>

<?php
//fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040151");

    return $conn;
}

//function untuk melakukan query dan memasukannya ke dalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>
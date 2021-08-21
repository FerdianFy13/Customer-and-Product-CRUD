<?php
require "../db_con.php"; // menambahkan file koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") { // cek metode request
    $merek = test_input($_POST["merek"]);
    $type = test_input($_POST["type"]);
    $deskripsi = test_input($_POST["deskripsi"]);

    // query ke database
    $query = "INSERT INTO produk (merek,type,deskripsi) VALUES ('$merek','$type','$deskripsi')";

    if (mysqli_query($db, $query)) {
        header("location: index.php", true, 301);
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
}
mysqli_close($db);

// function untuk menyaring data
// function test_input($data)
// {
//     $data = trim($data); // menghapus spasi tambahan, tab, ganti baris
//     $data = stripslashes($data); // menghapus slash /
//     $data = htmlspecialchars($data); // menambahkan escaped character u/ karakter khusus
//     return $data;
// }
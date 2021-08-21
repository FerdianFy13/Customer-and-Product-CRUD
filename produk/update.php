<?php
require "../db_con.php"; // menambahkan file koneksi database
if ($_SERVER["REQUEST_METHOD"] == "POST") { // cek metode request
    $id = test_input($_POST["id"]);
    $merek = test_input($_POST["merek"]);
    $type = test_input($_POST["type"]);
    $deskripsi = test_input($_POST["deskripsi"]);

    // query ke database
    $query = "UPDATE produk SET merek='$merek', type='$type',deskripsi='$deskripsi' WHERE id='$id'";

    if (mysqli_query($db, $query)) {
        header("location: index.php", true, 301);
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
}
mysqli_close($db);
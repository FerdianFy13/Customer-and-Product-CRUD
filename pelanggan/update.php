<?php
require "../db_con.php"; // menambahkan file koneksi database
if ($_SERVER["REQUEST_METHOD"] == "POST") { // cek metode request
    $id = test_input($_POST["id"]);
    $nama = test_input($_POST["nama"]);
    $telepon = test_input($_POST["telepon"]);

    // query ke database
    $query = "UPDATE pelanggan SET nama='$nama', telepon='$telepon' WHERE id='$id'";

    if (mysqli_query($db, $query)) {
        header("location: index.php", true, 301);
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
}
mysqli_close($db);
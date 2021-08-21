<?php
// sesuaikan dengan setting basis data
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "belajar1";

$db = mysqli_connect($server, $user, $password, $nama_database);
if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

// function untuk menyaring data
function test_input($data)
{
    $data = trim($data); // menghapus spasi tambahan, tab, ganti baris
    $data = stripslashes($data); // menghapus slash /
    $data = htmlspecialchars($data); // menambahkan escaped character u/ karakter khusus
    return $data;
}
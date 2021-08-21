<?php
require "db_con.php";

$username = "Ferdian Firmansyah";
$password = "admin123";
$email = "ferdianfy13@gmail.com";
$level = "admin";

// enkripsi
$salt1 = "2345*&^";
$salt2 = "sdfg23";
$token = md5($salt1 . $password . $salt2);

$query = "INSERT INTO users VALUES ('$username','$token','$email','$level')";
$hasil = mysqli_query($db, $query);
if ($hasil) {
    echo "Data user telah disimpan";
} else {
    die("Gagal menyimpan" . mysqli_error($db));
}
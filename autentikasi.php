<?php
session_start();                // mulai session
require "db_con.php";           // menambahkan file koneksi database
$username = $password = "";     // mendefinisikan variabel dan diisi kosong

if ($_SERVER["REQUEST_METHOD"] == "POST") { // cek metode request
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    // enkripsi
    $salt1 = "2345*&^";
    $salt2 = "sdfg23";
    $token = md5($salt1.$password.$salt2);

    // query ke database
    $query = "SELECT username,password,level FROM users where username='".$username."'";
    $hasil = mysqli_query($db,$query);

    if (mysqli_num_rows($hasil) > 0) {      // periksa hasil query
        $user = mysqli_fetch_assoc($hasil); // simpan dalam array assosiatif
        if($user['password'] == $token ){
            $_SESSION["user"] = $user["username"];  // isi session user
            $_SESSION["level"] = $user["level"];    // isi session level
            header("location: index.php", true, 301);
            exit();
        }else{
            echo "User atau password tidak sesuai";
        }
    }else{
        echo "User atau password tidak sesuai";
    }
}
mysqli_close($db);


?>


















<?php
/* echo "Selamat datang, ".$_POST["username"] . ".</br>";
echo "Password yg kamu gunakan, ".$_POST["password"] . ".";
*/

/*
if ($_SERVER["REQUEST_METHOD"] == "POST") { // cek metode request
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    // periksa username & password
    if($username == "Suwardiyanto" && $password=="SulitDitebak"){
        echo "Selamat datang ". $username .".";
    }else{
        echo "User \"" .$username. "\" tidak ditemukan";
    }
}
 */
?>


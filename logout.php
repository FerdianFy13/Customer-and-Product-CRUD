<?php
session_start();
$_SESSION = array(); // mengosongkan isi session
header("location: index.php", true, 301);
exit();
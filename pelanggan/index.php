<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location: ../login.php", true, 301);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
require "../head.php";
?>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <a class="navbar-brand" href="javascript:void(0)">DTS</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <?php
if (isset($_SESSION['user'])) {
    ?>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../produk/index.php">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../pelanggan/index.php">Pelanggan</a>
                </li>
            </ul>
            <ul class="navbar-nav my-2 my-lg-0">
                <a class="nav-link active" href="#"><?=$_SESSION["user"]?>,</a>
                <a class="nav-link active" href="../logout.php">Logout</a>
            </ul>
            <?php
}
?>
        </div>
    </nav>

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-12">
                <h2>Kelola Pelanggan</h2>
                <a href="form_create.php" class="btn btn-info" role="button">Tambah Pelanggan</a>
                <div class="bd-example">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
require "../db_con.php"; // menambahkan file koneksi database
// query ke database
$query = "SELECT * FROM pelanggan";
$hasil = mysqli_query($db, $query);
$no = 0;
while ($pelanggan = mysqli_fetch_assoc($hasil)) { // simpan dalam array assosiatif
    /*echo "<pre>";
    print_r($pelanggan);
    echo "</pre>";*/
    $no++;
    ?>
                            <tr>
                                <th scope="row"><?=$no?></th>
                                <td><?=$pelanggan['nama']?></td>
                                <td><?=$pelanggan['telepon']?></td>
                                <td>
                                    <a href="form_update.php?id=<?=$pelanggan['id']?>">Edit</a>
                                    <a href="confirm_delete.php?id=<?=$pelanggan['id']?>">Delete</a>
                                </td>
                            </tr>
                            <?php
}
?>
                        </tbody>
                    </table>
                </div>
                <hr class="d-sm-none">
            </div>
        </div>
    </div>

    <div class="jumbotron text-center bg-light" style="margin-bottom:0">
        <h4><a href="https://github.com/FerdianFy13" class="text-decoration-none text-danger">Ferdian Firmansyah</a>
        </h4>
    </div>

</body>

</html>
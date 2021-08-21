<?php
session_start();
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
                    <a class="nav-link active" href="../produk/index.php">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pelanggan/index.php">Pelanggan</a>
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
    <?php
// mengambil data produk dengan id=..
require "../db_con.php";
$id = test_input($_GET["id"]);
$query = "SELECT * FROM produk WHERE id='$id'";
$hasil = mysqli_query($db, $query);
$produk = mysqli_fetch_assoc($hasil);
//print_r($produk);
if (!isset($produk)) {
    header("location: index.php", true, 301);
    exit();
}
?>

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-12">
                <h2>Hapus Produk</h2>
                <table class="table table-hover">
                    <tr>
                        <th scope="col" width="15em">ID</th>
                        <td scope="col"><?=$produk['merek']?></td>
                    </tr>
                    <tbody>
                        <tr>
                            <th scope="row">Merek</th>
                            <td><?=$produk['type']?></td>
                        </tr>
                        <tr>
                            <th scope="row">Type</th>
                            <td><?=$produk['deskripsi']?></td>
                        </tr>
                    </tbody>
                </table>
                <form action="delete.php" method="post">
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="hidden" name="id" value="<?=$produk['id']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <a href="index.php" class="btn btn-info" role="button">Batal</a>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-warning">Hapus</button>
                        </div>
                    </div>
                </form>
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
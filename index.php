<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php
require "head.php";
?>

<body>
    <?php
if (!isset($_SESSION['user'])) {
    ?>
    <?php
}
?>

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
                    <a class="nav-link active" href="#">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produk/index.php">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pelanggan/index.php">Pelanggan</a>
                </li>
            </ul>
            <?php
}
?>
            <ul class="navbar-nav my-2 my-lg-0">
                <?php
if (!isset($_SESSION['user'])) {
    ?>
                <a class="nav-link" href="login.php">Login</a>
                <?php
} else {
    ?>
                <a class="nav-link active" href="#"><?=$_SESSION["user"]?></a>
                <a class="nav-link active" href="logout.php">Logout</a>
                <?php
}
?>
            </ul>
        </div>
    </nav>

    <div class="container" align="center" style="margin-top:30px">
        <div class="row">
            <div class="col">
                <h2>About Me</h2>
                <h5>Photo of me:</h5>
                <div class="fakeimg">
                    <img src="https://d26bwjyd9l0e3m.cloudfront.net/wp-content/uploads/2015/10/Review-One-Piece-Pirate-Warriors-3-Luffy-Image.jpg"
                        alt="" style="width:200px; height: 200px; " class="img-responsive mt-auto">
                </div>
                <h4>One Piece</h4>
                <p>Web Developer || Mobile Developer</p>
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
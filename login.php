<!DOCTYPE html>
<html lang="en">
<?php
require "head.php";
?>

<body>
    <div class="simple-login-container">
        <h2>Login Form</h2>
        <form action="autentikasi.php" method="post">
            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="submit" class="btn btn-block btn-login">
                </div>
            </div>
        </form>
    </div>

</body>

</html>

<style>
body {
    background-color: lightcoral;
    font-size: 14px;
    color: #fff;
}

.simple-login-container {
    width: 300px;
    max-width: 100%;
    margin: 50px auto;
}

.simple-login-container h2 {
    text-align: center;
    font-size: 20px;
}

.simple-login-container .btn-login {
    background-color: #FF5964;
    color: #fff;
}

a {
    color: #fff;
}
</style>
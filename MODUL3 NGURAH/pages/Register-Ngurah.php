<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Register</title>
    <style>
       .login {
        padding: 20%;
       }
    </style>
</head>

<body>
    <div class="row">
        <div class="col order-last">
            <div class="login xd-flex justify-content-evenly">
                <h1 class="mb-3">Registrasi</h1>
                <form action="../connector/register.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nomor Handphone</label>
                        <input type="text" name="no_hp" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Konfirmasi Kata Sandi</label>
                        <input type="password" name="confirm_password" class="form-control" onkeyup='check();' id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
                <p class="mt-3">Anda sudah punya akun?
                    <a href="Login-Ngurah.php">Login</a>
                </p>
            </div>
        </div>
            <div class="col order-first">
            <img src="../asset/bg-login.png" alt="Login image" class="" style="object-fit: cover; object-position: left;">
            </div>
        </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
<?php 
session_destroy();
?>
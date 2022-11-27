
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
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
                <h1 class="mb-3">Login</h1>
                <form action="../connector/login.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="remember" value="1" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <p class="mt-3">Anda belum punya akun?
                    <a href="Register-Ngurah.php">Daftar</a>
                </p>
            </div>
        </div>
            <div class="col order-first">
            <img src="../asset/bg-login.png" alt="Login image" class="" style="object-fit: cover; object-position: left;">
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
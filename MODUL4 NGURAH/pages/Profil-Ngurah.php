<?php
session_start();

if(!empty($_SESSION['email']) and !empty($_SESSION['password'])){

require '../connector/connector.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    <?php include '../asset/style/index.css';
    ?>
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg justify-content-between bg-primary">
        <div class="container-fluid">
            <div class="container collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold; color:white;" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/ListCar-Ngurah.php">Mycar</a>
                    </li>
                </ul>
            </div>
            <a class="nav-link btn btn-light m-3 btn-sm" style="font-weight: bold; color:black;" href="Add-Ngurah.php" type="button">Tambah Mobil</a>
            <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" style="font-weight: bold; color:black;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['email'];?>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="Profil-Ngurah.php">Profil</a></li>
                    <li><a class="dropdown-item" href="../connector/logout.php">LogOut</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="d-flex justify-content-center mt-5 mb-5">Profil</h1>

        <div class="row">
            <div class="col-4">
                <h2 class="mb-4">Email</h2>
                <h2 class="mb-4">Nama</h2>
                <h2 class="mb-4">Nomor Handphone</h2>
                <hr>
                <h2 class="mb-4">Kata Sandi</h2>
                <h2 class="mb-4">Konfirmasi Kata Sandi</h2>
                <h2 class="mb-4">Warna Navbar</h2>
            </div>
            <div class="col-6">
                <form>
                    <div class="mb-4">
                        <input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" value='<?php echo $_SESSION['email'];?>' disabled>
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control" id="exampleInputPassword1 ">
                    </div>
                    <hr>
                    <div class="mb-4">
                        <input type="text" class="form-control" id="exampleInputPassword1" value='<?php echo $_SESSION['password'];?>'>
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-4">
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
            <div class="mt-5">
                <img src="../asset/logo-ead 1.png" class="" alt=""> <p class='m-5 d-inline text-muted'>Ngurah_1202200028</p>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

<?php }?>
<?php
require './connector/connector.php';

$query = "SELECT * FROM showroom_nama_table";
$result = mysqli_query($connector, $query);

function onClick($result)
{
  if (mysqli_num_rows($result) > 0) {
    echo "ListCar-Ngurah.php";
  } else {
    echo"Add-Ngurah.php";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    <?php include "./asset/style/index.css";
    ?>
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <div class="container collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold; color:white;" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/Add-Ngurah.php">Mycar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="jumbotron">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center tengah gap-5">
                <div>
                    <h1>
                        Selamat Datang di<br /> Show Room Ngurah
                    </h1>
                    <p>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis<br /> cursus vestibulum,
                        facilisi ac,
                        sed faucibus.</p>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="<?php if (mysqli_num_rows($result) > 0) {
                                      echo "./pages/ListCar-Ngurah.php";
                                    } else {
                                      echo "./pages/Add-Ngurah.php";
                                    } ?>" class="mycar" type="button">Mycar</a>
                    </div>
                    <span class="d-flex gap-5 align-items-center">
                        <img src="./asset/logo-ead 1.png" alt="" style="margin-top: 70px;">
                        <p style="margin-top: 80px; font-size:12px;">Ngurah_1202200028</p>
                    </span>
                </div>
                <img src="./asset/Image.png" alt="">
            </div>
        </div>
    </section>
</body>

</html>
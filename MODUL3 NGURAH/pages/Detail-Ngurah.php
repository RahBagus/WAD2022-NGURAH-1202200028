<?php
session_start();

if(!empty($_SESSION['email']) and !empty($_SESSION['password'])){

require '../connector/connector.php';

$id = $_GET['id'];

$mysql = "SELECT * FROM showroom_nama_table WHERE id_mobil = $id";

$result = mysqli_query($connector, $mysql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    <?php include "../asset/style/index.css";
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
                    <li><a class="dropdown-item" href="P">Profil</a></li>
                    <li><a class="dropdown-item" href="../connector/logout.php">LogOut</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id='detail'>
        <div class="container">
            <?php
      while ($getDetail = mysqli_fetch_array($result)) {
        echo "
                <h1 class='tambahh1'>" . $getDetail["nama_mobil"] . "</h1>
                <p class='tambahp'>Detail Mobil " . $getDetail["nama_mobil"] . "</p>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                  <img src='../asset/" . $getDetail["foto_mobil"] . "' alt='foto_mobil'>
                  <form action='' enctype='multipart/form-data'>
                    <label for='nama'>Nama Mobil</label>
                    <input type='text' id='nama' name='nama' value='" . $getDetail["nama_mobil"] . "' readonly>
                    <label for='pemilik'>Nama Pemilik</label>
                    <input type='text' id='pemilik' name='pemilik' value='" . $getDetail["pemilik_mobil"] . "' readonly>
                    <label for='merk'>Merk</label>
                    <input type='text' id='merk' name='merk' value='" . $getDetail["merk_mobil"] . "' readonly>
                    <label for='tanggalbeli'>Tanggal Beli</label>
                    <input type='date' id='tanggalbeli' name='tanggalbeli' value='" . $getDetail["tanggal_beli"] . "' readonly>
                    <label for='desc'>Deskripsi</label>
                    <textarea id='desc' name='desc' style='height:200px; width: 600px; border-radius: 8px;' readonly> " . $getDetail["deskripsi"] . " </textarea>
                    <label for='inputGroupFile01'>Foto</label>
                    <input type='file' class='form-control' id='inputGroupFile01' value='c:/" . $getDetail["foto_mobil"] . "' name='gambar' style='height: 40px;'>
                    <label for='status'>Status Pembayaran</label>
                    <span class='d-flex'>
                      <input type='radio' name='status' id='lunas' value='Lunas' " . (($getDetail["status_pembayaran"] == 'Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='lunas' style='margin-top: 15px; margin-right:10px;'>Lunas</label>
                      <input type='radio' name='status' id='belum' value='Belum Lunas' " . (($getDetail["status_pembayaran"] == 'Belum Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='belum' style='margin-top: 15px;'>Belum Lunas</label>
                    </span>
                    <a href='Edit-Ngurah.php?id=" . $getDetail["id_mobil"] . "' class='btn btn-primary' style='margin-top: 40px;'>Edit</a>
                  </form>
                </div>
            ";
      }
      ?>
        </div>
    </section>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
<?php }?>
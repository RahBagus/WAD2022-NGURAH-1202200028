<?php
session_start();

if(!empty($_SESSION['email']) and !empty($_SESSION['password'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car</title>
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
                        <a class="nav-link" style="font-weight: bold; color:white;" href="../pages/Home-Ngurah.php">Home</a>
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
    <section id="form">
        <div class="container">
            <div class="tambah">
                <h1>
                    Tambah Mobil
                </h1>
                <p>
                    Tambah Mobil baru anda ke list show room
                </p>
            </div>
            <form action="../connector/insert.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama" class="form-label" style="margin-top: 30px;"><b>Nama Mobil</b></label>
                    <input name="nama" type="text" class="form-control" id="nama" aria-describedby="nama"
                        placeholder="Nama Mobil...">
                </div>
                <div class="mb-3">
                    <label for="pemilik" class="form-label"><b>Nama Pemilik</b></label>
                    <input name="pemilik" type="text" class="form-control" id="pemilik" aria-describedby="pemilik"
                        placeholder="Nama Pemilik...">
                </div>
                <div class="mb-3">
                    <label for="merk" class="form-label"><b>Merk</b></label>
                    <input name="merk" type="text" class="form-control" id="Merk" aria-describedby="Merk"
                        placeholder="Merk Mobil...">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label"><b>Tanggal Beli</b></label>
                    <input name="tanggalbeli" type="date" class="form-control" id="date" aria-describedby="date">
                </div>
                <div class="mb-3" style="display: block;">
                    <label for="deskripsi" class="form-label"><b>Deskripsi</b></label>
                    <textarea name="desc" id="deskripsi" name="deskripsi" class="form-control"
                        placeholder="Masukkan Deskripsi
                        
                        "
                        style="width: 1000px; height: 147px; border: 1px solid #757575; border-radius: 8px;"></textarea>
                </div>
                <div class="mt-3">
                    <label for="formFile" class="form-label"><b>Foto</b></label>
                    <input type="file" class="form-control" id="foto" name='gambar' accept="image/* "
                        style="height: 37px;">
                </div>
                <label for="pembayaran" style="margin-top: 30px;"><b>Status Pembayaran</b></label>
                <div class="mt-3 d-flex" style="color: #757575; font-size: 15px;">
                    <input name="status" class="form-check-input" type="radio" name="inlineRadioOptions"
                        id="inlineRadio1" value="option1" style="width: 17px; height: 17px;">
                    <label class="form-check-label" for="inlineRadio1" style="margin-left: 10px;">Lunas</label>
                    <input name="status" class="form-check-input" type="radio" name="inlineRadioOptions"
                        id="inlineRadio2" value="option2" style="width: 17px; height: 17px; margin-left: 20px">
                    <label class="form-check-label" for="inlineRadio2" style="margin-left: 10px;">Belum Lunas</label>
                </div>
                <div style="margin-top:50px; padding-bottom:50px;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>

<?php }
?>
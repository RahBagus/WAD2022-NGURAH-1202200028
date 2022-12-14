<?php
session_start();

if(!empty($_SESSION['email']) and !empty($_SESSION['password'])){
require '../connector/connector.php';

$query = "SELECT * FROM showroom_nama_table";
$result = mysqli_query($connector, $query);

if (isset($_GET['message'])) {
  if ($_GET['message'] == 'success') {
    echo "<script>alert('successfuly added to database ')</script>";
  } else if ($_GET['message'] == 'update') {
    echo "<script>alert('Data berhasil diupdate')</script>";
  } else if ($_GET['message'] == 'delete') {
    echo "<script>alert('Data berhasil dihapus')</script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Car</title>
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
    <section id="list">
        <div class="container">
            <div>
                <h1>My Show Room</h1>
                <p>List Show Room Ngurah_1202200028</p>
                <div class="d-flex gap-5">
                    <?php
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='card cardcontent' style='width: 18rem;'>
            <img src='../asset/" . $row["foto_mobil"] . "' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
            <div class='card-body'>
              <h5 class='card-title'>" . $row["nama_mobil"] . "</h5>
              <p class='card-text'>" . substr($row["deskripsi"], 0, 50) . '...' . "</p>
              <span class='d-flex'>
                <a href='Detail-Ngurah.php?id=" . $row["id_mobil"] . "' class='btn btn-primary' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                <a href='../connector/delete.php?id=" . $row["id_mobil"] . "' class='btn btn-danger' style='border-radius: 100px; width:140px; height: 36px; margin-left:20px;'>Delete</a>
              </span>
            </div>
          </div>";
            }
          } else {
            echo "0 results";
          }
          ?>
                </div>
            </div>
        </div>
    </section>

    <footer class="fixed-bottom" style="padding-bottom: 50px;">
        <div class="container">
            <p
                style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 19px; color: #757575;">
                Jumlah Mobil : <?php echo mysqli_num_rows($result) ?>
            </p>
        </div>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>

<?php }?>
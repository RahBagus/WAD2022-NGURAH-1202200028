<?php
require '../connector/connector.php';

$id = $_GET['id'];

$mysql  ="DELETE FROM showroom_nama_table WHERE id_mobil = $id";

if (mysqli_query($connector, $mysql )) {
  header("location: ../pages/ListCar-Ngurah.php?message=delete");
} else {
  echo "Gagal";
}
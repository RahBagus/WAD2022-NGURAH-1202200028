<?php
require '../connector/connector.php';

$namamobil = $_POST['nama'];
$pemilik = $_POST['pemilik'];
$merk = $_POST['merk'];
$tanggalbeli = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];
$gambar = $_FILES['gambar']['name'];
$target = "../asset/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
  $mysql = "INSERT INTO showroom_nama_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$namamobil', '$pemilik', '$merk', '$tanggalbeli', '$desc', '$gambar', '$status')";
  if (mysqli_query($connector, $mysql)) {
    header("location: ../pages/ListCar-Ngurah.php?message=success");
  } else {
    echo "Gagal";
  }
} else {
  echo "Gagal";
}
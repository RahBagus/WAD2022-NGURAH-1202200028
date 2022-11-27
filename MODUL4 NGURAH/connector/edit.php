<?php
include 'connector.php';

$nama_gambar = $_FILES['foto_mobil']['name'];
$lokasi_gambar = $_FILES['foto_mobil']['tmp_name'];
$tipe_gambar = $_FILES['foto_mobil']['type'];

if ($lokasi_gambar=="") {
	$input=mysqli_query($connector,"UPDATE showroom_nama_table SET 
		nama_mobil = '$_POST[nama]',
		pemilik_mobil = '$_POST[pemilik]',
		merk_mobil ='$_POST[merk]',
		tanggal_beli='$_POST[tanggalbeli]',
    deskripsi = '$_POST[desc]',
		status_pembayaran ='$_POST[status]' WHERE id_mobil ='$_POST[id]'") or die(mysqli_error($connector));	
}else{

	$data=mysqli_fetch_array(mysqli_query($connector, "SELECT * FROM showroom_nama_table WHERE id_mobil='$_POST[id]'"));
	if ($data['foto_mobil']!="") unlink("../asset/$data[foto_mobil]");

	move_uploaded_file($lokasi_gambar, "../asset/$nama_gambar");
	$input=mysqli_query($connector,"UPDATE showroom_nama_table SET 
	 nama_mobil = '$_POST[nama]',
		pemilik_mobil = '$_POST[pemilik]',
		merk_mobil ='$_POST[merk]',
		tanggal_beli='$_POST[tanggalbeli]',
    deskripsi = '$_POST[desc]',
		status_pembayaran ='$_POST[status]',
    foto_mobil = '$nama_gambar' WHERE id_mobil ='$_POST[id]'") or die(mysqli_error($connector));

}
if ($input) {
  header("location: ../pages/ListCar-Ngurah.php?message=update");
  echo "<script>alert('Data berhasil di edit')</script>";
}

if (isset($_GET['message'])) {
   if ($_GET['message'] == 'succes') {
     echo "<script>alert('successfuly added to database ')</script>";
   } else if ($_GET['message'] == 'update') {
     echo "<script>alert('Data berhasil di edit')</script>";
   } else if ($_GET['message'] == 'delete') {
     echo "<script>alert('Data berhasil dihapus')</script>";
   }
 }
?>
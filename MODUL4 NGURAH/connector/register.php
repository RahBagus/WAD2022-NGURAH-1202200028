<?php 
session_start();

require '../connector/connector.php';

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
    $no_hp = $_POST['no_hp'];
;

if($password === $confirm_password){

    $query= mysqli_query($connector, "INSERT INTO user_ngurah set 
    nama = '$nama',
    email = '$email',
    password = '$password',
    no_hp = '$no_hp'") or die(mysqli_error($connector));


    echo "<script>alert('Berhasil Registrasi!')</script>";
    echo "<meta http-equiv='refresh' content='1; url=../pages/Login-Ngurah.php'>";
}
else{
    echo "Password berbeda dengan password confirmasi anda";
}
	

?>



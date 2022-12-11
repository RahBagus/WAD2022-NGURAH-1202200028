<?php
session_start();
include ("connector.php");

$email = $_POST['email'];
$password = $_POST['password'];

$data=mysqli_query($connector,"SELECT * FROM user_ngurah where email'$email' and password='$password'");
$jumlah=mysqli_fetch_array($data);
$cek=mysqli_num_rows($data);

if ($cek>0) {
	$_SESSION['email']=$jumlah['email'];
	$_SESSION['password']=$jumlah['password'];

    if(!empty($_POST['remember'] == 1)){
        setcookie("email", $email,time()+ 3600);			
        setcookie("password", $password ,time()+ 3600);
    }
    
    echo "<script>alert('Login Berhasil! <br> <a href='../pages/Home-Ngurah.php'>Dashboard</a>')</script>";
    echo "<meta http-equiv='refresh' content='1; url=../pages/Home-Ngurah.php'>";

}else{
    echo "<script>alert('Login Gagal!')</script>";
    echo "<meta http-equiv='refresh' content='1; url=../pages/Login-Ngurah.php'>";

}

?>

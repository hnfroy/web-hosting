<?php 

session_start();

include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"SELECT * from admin where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>
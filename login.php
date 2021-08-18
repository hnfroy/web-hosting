<!DOCTYPE html>
<html>
<head>
	<title>Login Library</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body1>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}?>
    <div class="box">
    <br>
	<h1><center>Login</center></h1>
    <br>

	<form method="post" action="ceklogin.php">
		<table border="0" class="tabel1">
			<tr>
				<td><label>Username</label></td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username" required="username"></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password" required="username"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button class="btn">Log in</button></td>
			</tr>
		</table>			
	</form>
</div>
</body1>
</html>
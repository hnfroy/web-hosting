<?php
//memasukkan file config.php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Library</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">LIBRARY ONLINE</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Tabel Data</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tambah.php">Input Data Buku</a>
					</li>
          			<li class="nav-item">
            		<a class="nav-link" href="logout.php">Log out</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container" style="margin-top:20px">
		<h2>
			<tr>DAFTAR BUKU YANG TERSEDIA</tr>
		</h2>
		
		<hr>
		
		<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>No.</th>
					<th>Judul</th>
					<th>Nama Penerbit</th>
					<th>Nama Pengarang</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id DESC") or die(mysqli_error($koneksi));
				if(mysqli_num_rows($sql) > 0){
					$no = 1;
					while($data = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['judul'].'</td>
							<td>'.$data['penerbit'].'</td>
							<td>'.$data['pengarang'].'</td>
							<td>
								<a href="edit.php?id='.$data['id'].'" class="btn btn-warning btn-sm">Edit</a>
								<a href="delete.php?id='.$data['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
		
	</div>

	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>
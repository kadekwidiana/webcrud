<?php
session_start();

if(empty($_SESSION['login'])){
	header("Location: login_admin.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>web jualan widi</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
	<a href="admin.php" class="btn btn-sm btn-primary float-right"><=Kembali</a>
		<br><br>
		<h1>Table Barang</h1>
		
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit Barang
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; //mengambil id barang yang diubah

				//menampilkan barang berdasarkan id
				$data = mysqli_query($koneksi, "select * from barang where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama Barang</label>
						<input type="text" name="nama" required="" class="form-control" value="<?= $row['nama']; ?>">

						<!-- menampung id yang diubah -->
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control" value="<?= $row['harga']; ?>">
					</div>

					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi"><?= $row['deskripsi']; ?></textarea>
					</div>
					<br>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">update data</button>
				</form>

				<?php

				//klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$nama = $_POST['nama'];
					$harga = $_POST['harga'];
					$deskripsi = $_POST['deskripsi'];

					//query mengubah barang
					mysqli_query($koneksi, "update barang set nama='$nama', harga='$harga', deskripsi='$deskripsi' where id ='$id'") or die(mysqli_error($koneksi));

					//redirect ke halaman index.php
					echo "<script>alert('data berhasil diupdate.');window.location='admin.php';</script>";
				}



				?>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>
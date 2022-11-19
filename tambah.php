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
			<div class="card-header bg-success text-white">
				Tambah Barang
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama Barang</label>
						<input type="text" name="nama" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control">
					</div>

					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi"></textarea>
					</div>
					<br>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
				</form>

				<?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik 
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$nama = $_POST['nama'];
					$harga = $_POST['harga'];
					$deskripsi = $_POST['deskripsi'];

					//query untuk menambahkan barang ke database
					$datas = mysqli_query($koneksi, "INSERT INTO barang (nama,harga,deskripsi)values('$nama', '$harga', '$deskripsi')") or die(mysqli_error($koneksi));
					//id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('Data berhasil disimpan.');window.location='admin.php';</script>";
				}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>
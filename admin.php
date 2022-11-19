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
<body style= "margin: 0;">
	
	<div class="container col-md-8 mt-4">
			<ul class="nav justify-content-end">
				<li class="nav-item">
					<a href="logout.php" class="btn btn-sm btn-primary float-right"><=Log-out</a>
				</li>
			</ul>
		<h1>Tabel Pengelolaan Barang Jualan</h1>
		<div class="card" >
			<div class="card-header bg-success text-white ">
				<a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah Data</a>
			</div>
			<div class="card-body" >
				<table class="table table-bordered">
					<thead>
						<tr style= "text-align: center">
							<th>No</th>
							<th>Nama Barang</th>
							<th>Harga</th>
							<th>Deskripsi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php');
							$datas = mysqli_query($koneksi, "select * from barang") or die(mysqli_error($koneksi));

							$no = 1;

							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['nama']; ?></td>
						<td>Rp <?= $row['harga']; ?></td>
						<td><?= $row['deskripsi']; ?></td>
						<td>
								<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah yakin ingin menghapus?');">Hapus</a>
						</td>
					</tr>
						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
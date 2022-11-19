<!DOCTYPE html>
<html>
<head>
	<title>web jualan widi</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
	
	<div class="container col-md-9 mt-4">
			<ul class="nav justify-content-end">
				<li class="nav-item">
                    
					<a href="login_admin.php" class="btn btn-sm btn-primary float-right">Login Admin=></a>
				</li>
			</ul>
		<h1>Data Barang</h1>
		<br>
		<form action="" method="post">
        	<input type="text" name="keyword" size="50" autofocus placeholder="Masukan Pencarian!" autocomplete="off">
        	<button type="submit" name="cari">Cari!</button>
    	</form>
		<br>
		<div class="card" >
			<div class="card-header bg-success text-white ">
				Tabel Barang Jualan 
			</div>
			<div class="card-body" >
				<table class="table table-bordered">
					<thead>
						<tr style= "text-align: center">
							<th>No</th>
							<th>Nama Barang</th>
							<th>Harga</th>
							<th>Deskripsi</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php');
							$datas = mysqli_query($koneksi, "SELECT * FROM barang") or die(mysqli_error($koneksi));

							$no = 1;
							
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td ><?= $no; ?></td>
						<td><?= $row['nama']; ?></td>
						<td>Rp.<?= $row['harga']; ?></td>
						<td><?= $row['deskripsi']; ?></td>
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
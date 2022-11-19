<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title>Login Admin jualan</title>
</head>
<body>
	<div class="container">
			

		<div class="row">
			<div class="col-md-4 offset-md-4 mt-5">
				

				<?php
				if(isset($_SESSION['error'])) {
				?>
				<div class="alert alert-warning" role="alert">
				  <?php echo $_SESSION['error']?>
				</div>
				<?php
				}
				?>
				
				<div class="card ">
					<div class="card-title text-center">
						<h1>Login Admin</h1>
					</div>
					<div class="card-body">
						<form action="process.php" method="post">
							<div class="form-group">
								<label for="username">Nama Admin</label>
								<input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="Nama Admin">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-primary">Masuk</button>
						</form>
					</div>
				</div>
				<br>
				<ul class="nav">
					<li class="nav-item">
					<a href="index.php" class="btn btn-sm btn-primary float-right"><=Kembali</a>
					</li>
				</ul>
				<br>
			</div>

		</div>

	</div>
</body>
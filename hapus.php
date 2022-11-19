<?php	
session_start();

if(empty($_SESSION['login'])){
	header("Location: login_admin.php");
}	

include 'koneksi.php'; 
$id = $_GET['id']; 

//query hapus
$datas = mysqli_query($koneksi, "delete from barang where id ='$id'") or die(mysqli_error($koneksi));

//alert dan redirect ke admin.php
echo "<script>alert('Data berhasil di hapus.');window.location='admin.php';</script>";
?>

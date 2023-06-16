<?php
session_start();
require('koneksi.php');
$npm = $_POST['npm'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE npm ='$npm' AND pass ='$password'");
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);

if($cek > 0){
	$_SESSION['npm'] = $npm;
	$_SESSION['id'] = $data["Id"];
	$_SESSION['nama'] = $data["Nama"];
	$_SESSION['jeniskelamin'] = $data["JenisKelamin"];
	header("location:../dashboardmhs.php");
}else{
	header("location:../index.php");
}
?>

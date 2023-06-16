<?php
session_start();
require('koneksi.php');
$nidn = $_POST['nidn'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM dosen WHERE nidn ='$nidn' AND Pass ='$password'");
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);

if ($cek > 0) {
	$_SESSION['nidn'] = $nidn;
	$_SESSION['iddosen'] = $data["IdDosen"];
	$_SESSION['namadosen'] = $data["NamaDosen"];
	header("location:../dashboarddosen.php");
} else {
	header("location:../index.php");
}

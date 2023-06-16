<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$idmatkul = $_GET['IdMataKuliah'];


// menghapus data dari database
  mysqli_query($koneksi,"DELETE FROM krs WHERE IdMatakuliah='$idmatkul'");

// mengalihkan halaman kembali ke index.php
header("location:../krs.php");

?>

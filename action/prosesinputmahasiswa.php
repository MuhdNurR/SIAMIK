<?php
  include 'koneksi.php';

  $nama = $_POST['nama'];
  $npm = $_POST['npm'];
  $jenkel = $_POST['jenkel'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $tempat = $_POST['tempat'];
  $date = $_POST['tgllahir'];
  $dosen = $_POST['dosen'];

  $date = date('Y-m-d', strtotime($date));

  $query = "INSERT INTO mahasiswa SET npm = '$npm', nama = '$nama', email = '$email', pass = '$pass'
  , tempatlahir = '$tempat', tanggallahir = '$date', jeniskelamin = '$jenkel', Iddosen = '$dosen'";
	mysqli_query($koneksi, $query);
  if ($query) {
    header("location:krs.php");
  }
 ?>

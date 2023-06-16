<?php
session_start();
include 'koneksi.php';
$idmhs = $_POST['nama'];
$matkul = $_POST['matkul'];
$smt = $_POST['semester'];
$nilai = $_POST['nilai'];

if (empty($_POST['semester'])) {
	?>
	<script language="JavaScript">
		alert('Data Harap Dilengkapi!');
	</script>
	<?php
} else {

	// Query SQL untuk insert data
	$query = "INSERT INTO ips SET IdMahasiswa = '$idmhs', IdMataKuliah = '$matkul', Semester = '$smt', IPS ='$nilai'";
	mysqli_query($koneksi, $query);

	if ($query) {
		header("location:../forminputtranskrip_dosen.php");
	}
}
?>

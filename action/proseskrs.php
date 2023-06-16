<?php
session_start();
include 'koneksi.php';
$id = $_SESSION['id'];
$matkul = $_POST['matkul'];



// Cek apakah kode matakuliah sudah ada dalam KRS
$queryCek = "SELECT * FROM krs WHERE id = '$id' AND IdMataKuliah = '$matkul'";
$resultCek = mysqli_query($koneksi, $queryCek);

if (mysqli_num_rows($resultCek) > 0) {
?>
	<script>
		$('.toastrDefaultError').click(function() {
			toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
		});
	</script>
	<?php
	header("location:../krs.php");
} else {
	// Query SQL untuk insert data
	$queryInsert = "INSERT INTO krs SET id = '$id', IdMataKuliah = '$matkul'";
	mysqli_query($koneksi, $queryInsert);

	if ($queryInsert) {
	?>
		<script>
			$(document).ready(function() {
				toastr.success('Data berhasil disimpan!');
			});
		</script>
<?php
		header("location:../krs.php");
	}
}

?>
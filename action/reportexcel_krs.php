<?php
	include 'koneksi.php';
	session_start();
	$id = $_SESSION['id'];
	require '../vendor/autoload.php';
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

	$spreadsheet = new Spreadsheet();
	$sheet = $spreadsheet->getActiveSheet();
	$sheet->setCellValue('A1','No');
	$sheet->setCellValue('B1','Mata Kuliah');
	$sheet->setCellValue('C1','SKS');

	$query = mysqli_query($koneksi, "SELECT matakuliah.SKS, matakuliah.NamaMataKuliah
		FROM mahasiswa
		JOIN krs ON mahasiswa.Id = krs.Id
		JOIN matakuliah on krs.IdMataKuliah = matakuliah.IdMataKuliah
		WHERE mahasiswa.Id = $id");
	$i = 2;
	$no = 1;
	while ($row = mysqli_fetch_array($query)) {
		// code...
		$sheet->setCellValue('A'.$i, $no++);
		$sheet->setCellValue('B'.$i, $row['NamaMataKuliah']);
		$sheet->setCellValue('C'.$i, $row['SKS']);
	}

	$styleArray = [
					'borders' => [
						'allBorders' => [
							'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
						],
					],
	];

	$i = $i - 1;
	$sheet->getStyle('A1:C'.$i)->applyFromArray($styleArray);

	$writer = new Xlsx($spreadsheet);
	$writer->save('report data siswa.xlsx');
 ?>

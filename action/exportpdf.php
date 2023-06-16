<?php
include 'koneksi.php';
require_once("../dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
session_start();
$id = $_SESSION['id'];
$query = mysqli_query($koneksi,"SELECT mahasiswa.Nama, matakuliah.NamaMataKuliah
		FROM mahasiswa
		JOIN krs ON mahasiswa.Id = krs.Id
		JOIN matakuliah on krs.IdMataKuliah = matakuliah.IdMataKuliah
		WHERE mahasiswa.Id = $id");
$html = '<center><h3>KRS</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
<tr>
<th>No</th>
<th>Nama</th>
<th>Mata Kuliah</th>
</tr>';
$no = 1;

while($data = mysqli_fetch_array($query))
{
    $html .= "<tr>
        <td>".$no."</td>
        <td>".$data["Nama"]."</td>
        <td>".$data["NamaMataKuliah"]."</td>
    </tr>";
    $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('Export KRS.pdf');
?>

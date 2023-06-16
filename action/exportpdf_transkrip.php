<?php
include 'koneksi.php';
require_once("../dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
session_start();
$id = $_SESSION['id'];
$query = mysqli_query($koneksi, "SELECT matakuliah.NamaMataKuliah, ips.Semester, ips.IPS, matakuliah.SKS FROM ips
JOIN matakuliah ON matakuliah.IdMatakuliah = ips.IdMatakuliah WHERE ips.IdMahasiswa = $id");
$html = '<center><h3>KRS</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
<tr>
<th>No</th>
<th>Mata Kuliah</th>
<th>Semester</th>
<th>SKS</th>
<th>IPS</th>
</tr>';
$no = 1;

while ($data = mysqli_fetch_array($query)) {
    $html .= "<tr>
        <td>".$no."</td>
        <td>".$data["NamaMataKuliah"]."</td>
        <td>".$data["Semester"]."</td>
        <td>".$data["SKS"]."</td>
        <td>".$data["IPS"]."</td>
    </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'portrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('Export Transkrip.pdf');
?>

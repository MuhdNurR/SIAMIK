<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Akademik</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="styles/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>
<?php
session_start();
$id = $_SESSION['id'];
require('action/koneksi.php');
?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include "sidebarmhs.php" ?>
    <!-- Preloader
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <!-- Main row -->
          <h4>Kartu Rencana Studi</h4>
          <table class="table table-bordered table-striped">
            <tr>
              <th>Nomor</th>
              <th>ID Mata Kuliah</th>
              <th>Mata Kuliah</th>
              <th>SKS</th>
              <th>Hari</th>
              <th>Jam Mulai</th>
              <th>Jam Selesai</th>
              <th>Aksi</th>
            </tr>
            <?php
            $query = mysqli_query($koneksi, "SELECT matakuliah.SKS, matakuliah.KodeMataKuliah, matakuliah.NamaMataKuliah, kelas.IdMatakuliah, jadwal.Hari, jadwal.JamMulai, jadwal.JamSelesai FROM mahasiswa JOIN krs ON mahasiswa.Id = krs.Id JOIN matakuliah on krs.IdMataKuliah = matakuliah.IdMataKuliah JOIN kelas ON kelas.IdMataKuliah = matakuliah.IdMataKuliah JOIN jadwal ON jadwal.IdKelas = kelas.IdKelas WHERE mahasiswa.Id = $id");
            $sum = mysqli_query($koneksi, "SELECT SUM(matakuliah.SKS) AS TotalSKS FROM mahasiswa JOIN krs ON mahasiswa.Id = krs.Id JOIN matakuliah on krs.IdMataKuliah = matakuliah.IdMataKuliah JOIN kelas ON kelas.IdMataKuliah = matakuliah.IdMataKuliah JOIN jadwal ON jadwal.IdKelas = kelas.IdKelas WHERE mahasiswa.Id = 3");
            $totalSKS = mysqli_fetch_assoc($sum)['TotalSKS'];
            if (mysqli_num_rows($query) > 0) {
              $no = 1;
              while ($data = mysqli_fetch_array($query)) {
                $idmatkul = $data['IdMatakuliah'];
            ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $data["NamaMataKuliah"]; ?></td>
                  <td><?php echo $data["KodeMataKuliah"]; ?></td>
                  <td><?php echo $data["SKS"]; ?></td>
                  <td><?php echo $data["Hari"]; ?></td>
                  <td><?php echo $data["JamMulai"]; ?></td>
                  <td><?php echo $data["JamSelesai"]; ?></td>
                  <td><a href="action/delete_krs.php?IdMataKuliah=<?php echo $idmatkul; ?>">
                      <button type="button" class="btn btn-danger toastrDefaultWarning">Hapus</button></a></td>
                </tr>
            <?php
                $no++;
              }
            }
            ?>
            <tr>
              <td colspan="0"></td>
              <td><strong>Total SKS</strong></td>
              <td colspan="1"></td>
              <td class="font-weight-bold" colspan="5"><?php echo $totalSKS; ?></td>
            </tr>
          </table>
          <?php
          if ($totalSKS == 24) {
          ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" disabled>
              Tambah KRS
            </button>
          <?php
          } else {
          ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
              Tambah KRS
            </button>
          <?php
          }
          ?>
          <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Form Tambah KRS</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="m-3" method="POST" action="action/proseskrs.php">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Mata Kuliah</label>
                          <select class="form-control" name="matkul">
                            <?php
                            session_start();
                            include 'action/koneksi.php';
                            $query = "SELECT * FROM matakuliah";
                            $hasil = mysqli_query($koneksi, $query);
                            $no = 0;
                            while ($data = mysqli_fetch_array($hasil)) {
                              $no++;
                            ?>
                              <option value="<?php echo $data['IdMataKuliah']; ?>">
                                <?php echo $data['NamaMataKuliah']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="submit">Kirim Ajuan</button>
                </div>
                </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
          <a href="exportpdf.php"><button type="button" class="btn btn-primary">Export PDF KRS</button></a>
          <a href="reportexcel_krs.php"><button type="button" class="btn btn-primary">Export Excel KRS</button></a>
          <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023 <a href="">R&A</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>www.upnjatim.ac.id</b>
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="plugins/toastr/toastr.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      $('.toastrDefaultSuccess').click(function() {
        toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultInfo').click(function() {
        toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultError').click(function() {
        toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultWarning').click(function() {
        toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });

    });
  </script>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>
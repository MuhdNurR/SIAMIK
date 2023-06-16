<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/adminlte.min.css">
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
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <title></title>
</head>

<body>
  <?php session_start();
  include 'sidebardosen.php'
  ?>

  <!-- Main content -->
  <section class="content-wrapper">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col">
          <h4 class="mt-2">Form Input Nilai Mahasiswa</h4>
          <form class="m-3" action="action/prosestranskrip.php" method="POST">
            <label for="">Nama Mahasiswa</label>
            <div class="row">
              <div class="col-md-12 mb-3">
                <select class="form-control" name="nama">
                  <?php
                  session_start();
                  include 'action/koneksi.php';
                  $query = "SELECT * FROM mahasiswa";
                  $hasil = mysqli_query($koneksi, $query);
                  $no = 0;
                  while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                    $NPM = $data['Id'];
                  ?>
                    <option value="<?php echo $NPM; ?>">
                      <?php echo $data['Nama']; ?>
                    </option>
                  <?php
                  }
                  ?>
                </select>
              </div>
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
              <div class="col-md-6">
                <div class="form-group">
                  <?php
                  $CekSemester = mysqli_query($koneksi, "SELECT MAX(Semester) AS Semester FROM ips WHERE IdMahasiswa = '" . $NPM . "'");
                  while ($row = mysqli_fetch_array($CekSemester)) {
                    $Semester = $row['Semester'];
                  }
                  ?>
                  <label>Semester</label>
                  <input type="text" class="form-control" placeholder="Semester" name="semester" value="<?php echo $Semester; ?>" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nilai</label>
                  <input type="text" class="form-control" placeholder="Nilai" name="nilai">
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Input Transkrip</button>
              </div>
          </form>
        </div>
      </div>
      <!-- /.row (main row) -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</body>
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

</html>
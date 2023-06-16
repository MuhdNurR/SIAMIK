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
</head>
<?php
session_start();
$id = $_SESSION['id'];
include 'koneksi.php';
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
          <form class="ms-3">
            <h5>Form Identitas</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email UPN</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Program Studi</label>
                  <select class="form-control">
                    <option value="sifo">Sistem Informasi</option>
                    <option value="sada">Sains Data</option>
                    <option value="if">Informatika</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Anggota 1</label>
                  <input type="text" class="form-control" name="namaanggota1" placeholder="Nama Anggota 1">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NPM Anggota 1</label>
                  <input type="text" class="form-control" name="npmanggota1" placeholder="NPM Anggota 1">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Anggota 2</label>
                  <input type="text" class="form-control" name="namaanggota2" placeholder="Nama Anggota 2 *tidak perlu diisi jika hanya satu anggota">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NPM Anggota 2</label>
                  <input type="text" class="form-control" name="npmanggota2" placeholder="NPM Anggota 2 *tidak perlu diisi jika hanya satu anggota">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Anggota 3</label>
                  <input type="text" class="form-control" name="namaanggota3" placeholder="Nama Anggota 3 *tidak perlu diisi jika hanya satu anggota">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NPM Anggota 3</label>
                  <input type="text" class="form-control" name="npmanggota3" placeholder="NPM Anggota 3 *tidak perlu diisi jika hanya satu anggota">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Anggota 4</label>
                  <input type="text" class="form-control" name="namaanggota4" placeholder="Nama Anggota 4 *tidak perlu diisi jika hanya satu anggota">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>NPM Anggota 4</label>
                  <input type="text" class="form-control" name="npmanggota4" placeholder="NPM Anggota 4 *tidak perlu diisi jika hanya satu anggota">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Instansi / Perusahaan</label>
                  <input type="text" class="form-control" name="instansi" placeholder="Nama Instansi atau Perusahaan">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Bagian / Divisi</label>
                  <input type="text" class="form-control" name="divisi" placeholder="Bagian atau divisi">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamatPerusahaan" placeholder="Alamat Perusahaan">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nomor Kontak</label>
                  <input type="text" class="form-control" name="nomorkontak" placeholder="Nomor Kontak">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Tanggal Dimulai</label>
                  <input type="date" class="form-control" name="tanggal mulai">
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Kirim Ajuan</button>
              </div>
            </div>
          </form>
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
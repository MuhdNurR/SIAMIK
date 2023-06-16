<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Akademik</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar sticky-top navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="index.html" class="navbar-brand">
                    <img src="https://siamik.upnjatim.ac.id/html/siamik/images/logoupnbaru.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">SIAMIK 2.0</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index3.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Link Fakultas</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="https://if.upnjatim.ac.id/" class="dropdown-item">Teknik Informatika</a></li>
                                <li><a href="https://sisfo.upnjatim.ac.id/" class="dropdown-item">Sistem Informasi</a></li>
                                <li><a href="https://sada.upnjatim.ac.id/" class="dropdown-item">Sains Data</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <a href="loginmahasiswa.php"><button class="btn bg-gradient-success">Login</button></a>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <!-- Main content -->
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="row">
                                            <div clas="col">
                                                <div class="card-body ml-2">
                                                    <h5 class="card-title text-bold mb-1">UNIVERSITAS PEMBANGUNAN NASIONAL VETERAN JAWA TIMUR</h5>
                                                    <p class="card-text mb-1">Jalan Raya Rungkut Madya, Gunung Anyar, Surabaya 60294</p>
                                                    <p class="card-text">SISTEM INFORMASI AKADEMIK (SIAMIK 2022)</p>
                                                </div>
                                            </div>
                                            <div class="col text-right align-self-center mr-3">
                                                <img width="250" src="https://siamik.upnjatim.ac.id/html/siamik/images/logoUPN.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title text-bold mb-1">Selamat Datang !</h5>
                                            <p class="card-text mb-1"><b>SIAMIK (Sistem Informasi Akademik)</b> adalah suatu sistem informasi utk mengelola KRS, MBKM, Presensi, KHS, Transkrip dlm penyelengaraan pendidikan di lingkungan UPNVJatim.</p>
                                            <h5 class="card-title text-bold mb-1">PERTOR BIDANG 1</h5>
                                            <p class="card-text mb-1">PERTOR NO.9 Tahun 2020</p>
                                            <h5 class="card-title text-bold mb-1">Akreditasi</h5>
                                            <p class="card-text mb-1">Institusi BANPT<br>Program Studi BANPT & FIBAA</p>
                                            <h5 class="card-title text-bold mb-1">Mahasiswa Aktif</h5>
                                            <p class="card-text">19,894</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <i class="far fa-calendar-alt d-inline-flex">
                                                <h5 class="card-title text-black-50 mb-1 ml-1">PEMBERITAHUAN KONVERSI MBKM SEMESTER GENAP TA.2022/2023</h5><br>
                                            </i>
                                            <p class="card-text text-bold mb-1">11 April Mei 2023 Jam 06:49 Wib</p>
                                            <a href="">
                                                <p class="card-text text-bold mb-2">Lihat Pengumuman</p>
                                            </a>
                                            <i class="far fa-calendar-alt d-inline-flex mt-2">
                                                <h5 class="card-title text-black-50 mb-1 ml-1">Pengumuman tentang pelaksana perkuliahan mahasiswa & kegiatan saat pelaksanaan ujian SNBT 2023</h5><br>
                                            </i>
                                            <p class="card-text text-bold mb-1">28 April 2023 Jam 17:00 Wib</p>
                                            <a href="">
                                                <p class="card-text text-bold mb-2">Lihat Pengumuman</p>
                                            </a>
                                            <i class="far fa-calendar-alt d-inline-flex mt-2">
                                                <h5 class="card-title text-black-50 mb-1 ml-1">PENGUMUMAN LIBUR DAN CUTI BERSAMA MAHASISWA</h5><br>
                                            </i>
                                            <p class="card-text text-bold mb-1">14 April 2023 Jam 10:55 Wib</p>
                                            <a href="">
                                                <p class="card-text text-bold mb-3">Lihat Pengumuman</p>
                                            </a>
                                            <button class="btn btn-outline-warning">Lihat Lebih</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-lg">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title m-0">E - Learning</h5>
                                        </div>
                                        <img width="155" src="images/e-learning.png" style="align-self: center;">
                                        <div class="card-body">
                                            <a href="https://ilmu.upnjatim.ac.id/" class="btn btn-outline-primary mt-4">Akses E-Learning</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title m-0">Kalender Akademik</h5>
                                        </div>
                                        <div class="card-body">
                                            <img width="155" src="https://siamik.upnjatim.ac.id/html/siamik/images/kalender.png">
                                            <a href="#" class="btn btn-outline-primary mt-4">TA. 2022/2023</a>
                                            <a href="#" class="btn btn-outline-primary mt-4">UKT</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title m-0">Merdeka Belajar - Kampus Merdeka</h5>
                                        </div>
                                        <div class="card-body">
                                            <img width="250" src="https://siamik.upnjatim.ac.id/html/siamik/images/mbkm2022.png">
                                            <a href="#" class="btn btn-outline-primary mt-2">MBKM</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title m-0">Daftar Peserta Kuliah</h5>
                                        </div>
                                        <div class="card-body">
                                            <img width="167" src="https://siamik.upnjatim.ac.id/html/siamik/images/list.png">
                                            <a href="#" class="btn btn-outline-primary mt-2">Lihat Daftar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row text-center">
                                <div class="col-lg">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title m-0">Top Score IPS</h5>
                                        </div>
                                        <div class="card-body">
                                            <img width="148" src="https://siamik.upnjatim.ac.id/html/siamik/images/topScore.png">
                                            <a href="#" class="btn btn-outline-primary mt-2">Lihat Top Score</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title m-0">PKL & Skripsi</h5>
                                        </div>
                                        <div class="card-body">
                                            <img width="145" src="https://siamik.upnjatim.ac.id/html/siamik/images/skripsi.png">
                                            <a href="#" class="btn btn-outline-primary mt-2">Info Skripsi</a>
                                            <a href="#" class="btn btn-outline-primary mt-2">Info PKL</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title m-0">Beasiswa & Bimbingan</h5>
                                        </div>
                                        <div class="card-body" style="padding-top: 7px;">
                                            <img width="122" src="https://siamik.upnjatim.ac.id/html/siamik/images/beasiswa.jpg">
                                            <a href="#" class="btn btn-outline-primary mb-2">Bimbingan & Konseling</a>
                                            <a href="#" class="btn btn-outline-primary">Info Beasiswa</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title m-0">Alumni</h5>
                                        </div>
                                        <div class="card-body">
                                            <img width="150" src="https://siamik.upnjatim.ac.id/html/siamik/images/wisuda.png">
                                            <a href="#" class="btn btn-outline-primary">Tracking Izajah</a>
                                            <a href="#" class="btn btn-outline-primary">Wisuda</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->



        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <strong>Copyright &copy; 2023 <a href="">R&A</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>www.upnjatim.ac.id</b>
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>
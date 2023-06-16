<?php
session_start();

require('action/koneksi.php');
include "sidebardosen.php";

$id = $_SESSION['iddosen'];

$query = mysqli_query($koneksi, "SELECT COUNT(IdDosen) AS IdDosen FROM `mahasiswa` WHERE mahasiswa.IdDosen = '" . $id . "'");


while ($row = mysqli_fetch_array($query)) {
    $dosen = $row['IdDosen'];
}

?>
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
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

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
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?php echo $dosen; ?></h3>
                                    <p>Orders Reason</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">Jumlah Mahasiswa <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                            <!-- ./col -->
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?php echo $data1[0]["TotalSubTotal"]; ?>$</h3>
                                    <p>Penjualan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">Jadwal Hari Ini <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                            <!-- ./col -->
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?php echo $data2[0]["SalesReason"]; ?></h3>
                                    <p>Orders Reason</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                            <!-- ./col -->
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?php echo $data1[0]["TotalSubTotal"]; ?>$</h3>
                                    <p>Penjualan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                            <!-- ./col -->
                            <!-- Data Diri -->
                            <div class="card bg-gradient-white">
                                <div class="card-header border-0">
                                    <h4 class="card-title">
                                        <i class="far fa-calendar-alt"></i>
                                        Data Diri
                                    </h4>
                                    <!-- /. tools -->
                                    <div class="card-body">
                                        <br>
                                        <span>
                                            <h5 class="text-bold">Nama</h5>
                                        </span>
                                        <span><?php echo $_SESSION['namadosen']; ?></span>
                                        <span>
                                            <h5 class="mt-2 text-bold">NIDN</h5>
                                        </span>
                                        <span><?php echo $_SESSION['nidn']; ?></span>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                            </div>
                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable">
                            <!-- Calendar -->
                            <div class="card bg-gradient-white">
                                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">
                                        <i class="far fa-calendar-alt"></i>
                                        Calendar
                                    </h3>
                                    <!-- tools card -->
                                    <div class="card-tools">
                                        <!-- button with a dropdown -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                                                <i class="fas fa-bars"></i>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a href="#" class="dropdown-item">Add new event</a>
                                                <a href="#" class="dropdown-item">Clear events</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">View calendar</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-light btn-sm" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pt-0">
                                    <!--The calendar -->
                                    <div id="calendar" style="width: 100%">
                                        <div class="bootstrap-datetimepicker-widget usetwentyfour">
                                            <ul class="list-unstyled">
                                                <li class="show">
                                                    <div class="datepicker">
                                                        <div class="datepicker-days" style="">
                                                            <table class="table table-sm">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th>
                                                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">June 2023</th>
                                                                        <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="dow">Su</th>
                                                                        <th class="dow">Mo</th>
                                                                        <th class="dow">Tu</th>
                                                                        <th class="dow">We</th>
                                                                        <th class="dow">Th</th>
                                                                        <th class="dow">Fr</th>
                                                                        <th class="dow">Sa</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td data-action="selectDay" data-day="05/28/2023" class="day old weekend">28</td>
                                                                        <td data-action="selectDay" data-day="05/29/2023" class="day old">29</td>
                                                                        <td data-action="selectDay" data-day="05/30/2023" class="day old">30</td>
                                                                        <td data-action="selectDay" data-day="05/31/2023" class="day old">31</td>
                                                                        <td data-action="selectDay" data-day="06/01/2023" class="day">1</td>
                                                                        <td data-action="selectDay" data-day="06/02/2023" class="day">2</td>
                                                                        <td data-action="selectDay" data-day="06/03/2023" class="day weekend">3</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td data-action="selectDay" data-day="06/04/2023" class="day weekend">4</td>
                                                                        <td data-action="selectDay" data-day="06/05/2023" class="day">5</td>
                                                                        <td data-action="selectDay" data-day="06/06/2023" class="day">6</td>
                                                                        <td data-action="selectDay" data-day="06/07/2023" class="day">7</td>
                                                                        <td data-action="selectDay" data-day="06/08/2023" class="day">8</td>
                                                                        <td data-action="selectDay" data-day="06/09/2023" class="day">9</td>
                                                                        <td data-action="selectDay" data-day="06/10/2023" class="day weekend">10</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td data-action="selectDay" data-day="06/11/2023" class="day active today weekend">11</td>
                                                                        <td data-action="selectDay" data-day="06/12/2023" class="day">12</td>
                                                                        <td data-action="selectDay" data-day="06/13/2023" class="day">13</td>
                                                                        <td data-action="selectDay" data-day="06/14/2023" class="day">14</td>
                                                                        <td data-action="selectDay" data-day="06/15/2023" class="day">15</td>
                                                                        <td data-action="selectDay" data-day="06/16/2023" class="day">16</td>
                                                                        <td data-action="selectDay" data-day="06/17/2023" class="day weekend">17</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td data-action="selectDay" data-day="06/18/2023" class="day weekend">18</td>
                                                                        <td data-action="selectDay" data-day="06/19/2023" class="day">19</td>
                                                                        <td data-action="selectDay" data-day="06/20/2023" class="day">20</td>
                                                                        <td data-action="selectDay" data-day="06/21/2023" class="day">21</td>
                                                                        <td data-action="selectDay" data-day="06/22/2023" class="day">22</td>
                                                                        <td data-action="selectDay" data-day="06/23/2023" class="day">23</td>
                                                                        <td data-action="selectDay" data-day="06/24/2023" class="day weekend">24</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td data-action="selectDay" data-day="06/25/2023" class="day weekend">25</td>
                                                                        <td data-action="selectDay" data-day="06/26/2023" class="day">26</td>
                                                                        <td data-action="selectDay" data-day="06/27/2023" class="day">27</td>
                                                                        <td data-action="selectDay" data-day="06/28/2023" class="day">28</td>
                                                                        <td data-action="selectDay" data-day="06/29/2023" class="day">29</td>
                                                                        <td data-action="selectDay" data-day="06/30/2023" class="day">30</td>
                                                                        <td data-action="selectDay" data-day="07/01/2023" class="day new weekend">1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td data-action="selectDay" data-day="07/02/2023" class="day new weekend">2</td>
                                                                        <td data-action="selectDay" data-day="07/03/2023" class="day new">3</td>
                                                                        <td data-action="selectDay" data-day="07/04/2023" class="day new">4</td>
                                                                        <td data-action="selectDay" data-day="07/05/2023" class="day new">5</td>
                                                                        <td data-action="selectDay" data-day="07/06/2023" class="day new">6</td>
                                                                        <td data-action="selectDay" data-day="07/07/2023" class="day new">7</td>
                                                                        <td data-action="selectDay" data-day="07/08/2023" class="day new weekend">8</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="datepicker-months" style="display: none;">
                                                            <table class="table-condensed">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th>
                                                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2023</th>
                                                                        <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month active">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="datepicker-years" style="display: none;">
                                                            <table class="table-condensed">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th>
                                                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th>
                                                                        <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year active">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="datepicker-decades" style="display: none;">
                                                            <table class="table-condensed">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th>
                                                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th>
                                                                        <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="picker-switch accordion-toggle"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- TO DO List -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="ion ion-clipboard mr-1"></i>
                                        To Do List
                                    </h3>

                                    <div class="card-tools">
                                        <ul class="pagination pagination-sm">
                                            <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                                            <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <ul class="todo-list" data-widget="todo-list">
                                        <li>
                                            <!-- drag handle -->
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <!-- checkbox -->
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                                <label for="todoCheck1"></label>
                                            </div>
                                            <!-- todo text -->
                                            <span class="text">Design a nice theme</span>
                                            <!-- Emphasis label -->
                                            <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                                            <!-- General tools such as edit or delete-->
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                                                <label for="todoCheck2"></label>
                                            </div>
                                            <span class="text">Make the theme responsive</span>
                                            <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                                <label for="todoCheck3"></label>
                                            </div>
                                            <span class="text">Let theme shine like a star</span>
                                            <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                                <label for="todoCheck4"></label>
                                            </div>
                                            <span class="text">Let theme shine like a star</span>
                                            <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo5" id="todoCheck5">
                                                <label for="todoCheck5"></label>
                                            </div>
                                            <span class="text">Check your messages and notifications</span>
                                            <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fas fa-ellipsis-v"></i>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </span>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input type="checkbox" value="" name="todo6" id="todoCheck6">
                                                <label for="todoCheck6"></label>
                                            </div>
                                            <span class="text">Let theme shine like a star</span>
                                            <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                                            <div class="tools">
                                                <i class="fas fa-edit"></i>
                                                <i class="fas fa-trash-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add
                                        item</button>
                                </div>
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- right col -->

                        <!-- Data Kontak Mahasiswa -->
                        <div class="card bg-gradient-white container-fluid">
                            <div class="card-header border-0">
                                <div class="card-body">
                                    <div class="row text-left">
                                        <div class="col-md text-left">
                                            <span>
                                                <h5 class="text-bold">Contact</h5>
                                            </span>
                                            <span>GEDUNG BAKPK UPN VETERAN JAWA TIMUR</span>
                                            <span>Jalan Raya Rungkut Madya, Gunung Anyar, Surabaya 60294</span>
                                            <span>Telp : 031-8706369, Fax : 031-8706372, eMail : admin@upnjatim.ac.id</span>

                                            <span>
                                                <h5 class="mt-2 text-bold">Pertanyaan/Keluhan</h5>
                                            </span>
                                            <span>Pertanyaan dan keluhan bisa disampaikan ke <a href="http://siadu.upnjatim.ac.id/">SIADU</a></span>
                                        </div>

                                        <div class="col-md text-right">
                                            <img width="75" src="	https://siamik.upnjatim.ac.id/html/siamik/images/logoupnbaru.png">
                                            <img width="100" src="	https://siamik.upnjatim.ac.id/html/siamik/images/logo-blu.png">
                                        </div>
                                    </div>
                                </div>
                                <!-- /. tools -->
                            </div>
                        </div>
                        <!-- End Data Akademik -->
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="">R&A</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>www.upntajim.ac.id</b>
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
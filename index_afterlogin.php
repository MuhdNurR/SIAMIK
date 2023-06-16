<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="styles/adminlte.min.css">

	<style type="text/css">

		html, body {
			max-width: 100%;
			overflow-x: hidden;
		}
		.banner{
			position: relative;
			text-align: center;
			color: white;
		}
		.tekstengah{
			position: absolute;
			top: 29%;
			left: 25%;
			transform: translate(-50%, -50%);
			color: white;
		}
		p{
			margin: -1px;
		}
		#sidebar{
			z-index: 0;
		}

	</style>
	<title></title>
</head>
<body>
	
	<div class="row flex-nowrap">
		<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark" id="sidebar">
			<div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
				<a href="index_afterlogin.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
					<span class="fs-5 d-none d-sm-inline">Menu</span>
				</a>
				<ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
					<li class="nav-item">
						<a href="krs.php" class="nav-link align-middle px-0">
							<i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Kartu Rencana Studi</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="transkrip.php" class="nav-link align-middle px-0">
							<i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Transkrip</span>
						</a>
					</li>
					<li>
						<a href="berkas.php" class="nav-link px-0 align-middle">
							<i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Berkas</span> 
						</a>
					</li>
					<li>
						<a href="presensi.php" class="nav-link px-0 align-middle">
							<i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Presensi</span> 
						</a>
					</li>
				</ul>
				<hr>
				<div class="dropdown pb-4">
					<a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
						<span class="d-none d-sm-inline mx-1">Nama Akun</span>
					</a>
					<ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
						<li><a class="dropdown-item" href="#">New project...</a></li>
						<li><a class="dropdown-item" href="#">Settings</a></li>
						<li><a class="dropdown-item" href="#">Profile</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="#">Sign out</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col">
			<img src="images/coverupn.jpg" class="img-thumbnail" style="width: 100%;">
			<div class="tekstengah"><h3>Sistem Informasi Akademik Mahasiswa <br>FASILKOM</h3></div>
			<div class="row">
				<div class="cardanu" style="background-color: lightgray;">
					<div class="row mt-2 justify-content-center" style="background-color: lightgray;">
						<div class="card mt-3" style="width:90%">
							<div class="card-body">
								<div class="row">
									<div class="col align-self-start">
										<h5 class="card-title">Data Diri</h5>
										<p class="card-text ms-3">Nama</p>
										<p class="card-text ms-3"><?php echo $_SESSION['nama'];?></p>
										<p class="card-text ms-3">NPM</p>
										<p class="card-text ms-3"><?php echo $_SESSION['npm']; ?></p>
										<p class="card-text ms-3">Alamat</p>
										<p class="card-text ms-3"><?php echo $_SESSION['jeniskelamin']; ?></p>
									</div>
									<div class="col">
									</div>
									<div class="col">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="cardanu" style="background-color: lightgray;">
					<div class="row mt-2 justify-content-center" style="background-color: lightgray;">
						<div class="card mt-3" style="width:90%">
							<div class="card-body">
								<div class="row">
									<div class="col align-self-start">
										<h5 class="card-title">Data Akademik</h5>
										<p class="card-text ms-3">Fakultas</p>
										<p class="card-text ms-3">Ilmu Komputer</p>
										<p class="card-text ms-3">Program Studi</p>
										<p class="card-text ms-3">Sistem Informasi</p>
										<p class="card-text ms-3">Dekan Ilmu Komputer</p>
										<p class="card-text ms-3">Dr. Ir. Novirina Hendrasarie, M.T.</p>
									</div>
									<div class="col">
									</div>
									<div class="col">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>
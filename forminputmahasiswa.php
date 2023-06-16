<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles/adminlte.min.css">
  <title></title>
</head>
<body>
  <div class="row flex-nowrap">
    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
      <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
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
      <h4 class="mt-2">Form Input Mahasiswa</h4>
      <form class="m-3" action="action/prosesinputmahasiswa.php" method="POST">
        <h5>Form Identitas</h5>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control" placeholder="nama" name="nama">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>NPM</label>
              <input type="text" class="form-control" placeholder="npm" name="npm">
            </div>
          </div>
          <div class="col-md-3">
            <label>Jenis Kelamin</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenkel" id="laki">
              <label class="form-check-label" for="laki">
                Laki-laki
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenkel" id="perempuan">
              <label class="form-check-label" for="perempuan">
                Perempuan
              </label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="email">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Password</label>
              <input type="text" class="form-control" name="password" placeholder="Password">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Tempat Lahir</label>
              <input type="text" name="tempat" class="form-control" placeholder="Tempat Lahir">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="date" class="form-control" name="tgllahir">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
							<label>Nama Dosen</label>
							<select class="form-control" name="dosen">
								<?php
								session_start();
								include 'action/koneksi.php';
								$query = "SELECT * FROM dosen";

								$hasil = mysqli_query($koneksi, $query);
								$no = 0;
								while ($data = mysqli_fetch_array($hasil)) {
									$no++;
									?>
									<option value="<?php echo $data['IdDosen']; ?>">
										<?php echo $data['NamaDosen']; ?></option>
									<?php } ?>
								</select>
							</div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Input Mahasiswa</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

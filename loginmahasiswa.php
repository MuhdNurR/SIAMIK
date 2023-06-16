<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/style.css">
</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/cover.png);"></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Login Mahasiswa</h3>
								</div>
							</div>
							<form action="action/proseslogin.php" method="POST" class="signin-form">
								<div class="form-group mt-2">
									<input type="text" class="form-control" name="npm" required>
									<label class="form-control-placeholder" name="npm">NPM</label>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" required>
									<label class="form-control-placeholder" name="password">Password</label>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
											<input type="checkbox">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Reset Password</a>
									</div>
								</div>
								<div class="form-group">
									<a href="index.php"><button type="button" class="form-control btn btn-outline-primary rounded submit px-3">Home</button></a>
								</div>
								<div class="form-group">
									<a href="logindosen.php"><button type="button" class="form-control btn btn-outline-primary rounded submit px-3">Login Dosen</button></a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Authentication</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./src/vendor/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="./src/vendor/bootstrap-v5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/app.css">
</head>
<body class="bg-primary">
	<noscript>Your browser does not support javascript!</noscript>
	<div class="container mt-3 mb-3">
		<div class="col-md-6 offset-sm-0 offset-md-3">
			<div class="card shadow">
				<div class="card-body">
					<h5 class="text-center font-weight-bold mb-4">Register Account</h5>
					<form>
						<div class="row">
							<div class="col">
								<input type="text" name="name" class="form-control" placeholder="Name" aria-label="username" minlength="3" maxlength="20" required />
							</div>
							<div class="col">
								<input type="email" name="email" class="form-control" placeholder="Email" aria-label="email" minlength="3" maxlength="20" required />
							</div>
						</div>
						<div class="row mt-2">
							<div class="col">
								<input type="password" name="password" class="form-control" placeholder="Password" aria-label="password" minlength="8" maxlength="20" autocomplete="off" required />
							</div>
							<div class="col">
								<input type="password" name="password-confirmed" class="form-control" placeholder="Verified Password" aria-label="password-confirmed" minlength="8" maxlength="20" autocomplete="off" required />
							</div>
						</div>
						<div class="form-group mt-2">
							<input type="date" name="born" class="form-control" aria-label="born" required />
						</div>
						<div class="form-group mt-2">
							<select class="form-select" aria-label="gender">
								<option>Select gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
						</div>
						<div class="form-group mt-2">
							<input type="text" name="location" class="form-control" placeholder="Location" aria-label="location" minlength="3" maxlength="50" required />
						</div>
						<button type="submit" class="btn btn-primary w-100 mt-2">Register</button>
						<p class="mt-3 mb-1 text-center">Have a account ? <a href="#" class="text-decoration-none">Login</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="./src/js/popper.min.js"></script>
    <script src="./src/vendor/bootstrap-v5/js/bootstrap.min.js"></script>
</body>
</html>
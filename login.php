<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Authentication</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./src/vendor/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="./src/vendor/bootstrap-v5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/app.css">
</head>
<body class="bg-primary">
	<div class="container mt-5">
		<div class="col-md-6 offset-sm-0 offset-md-3">
			<div class="card shadow">
				<div class="card-body">
					<h5 class="text-center font-weight-bold mb-4">Login to Social Media</h5>
					<form>
						<input type="text" name="name" class="form-control mt-2" placeholder="Name" aria-label="username" minlength="3" maxlength="20" required>
						<input type="password" name="password" class="form-control mt-2" placeholder="Password" aria-label="password" minlength="8" maxlength="20" autocomplete="off" required>
						<button type="submit" class="btn btn-primary w-100 mt-2">Login</button>
						<p class="text-center mb-2 mt-2">Or with</p>
						<div class="text-center">	
							<button type="submit" class="btn btn-primary mt-2"><i class="fab fa-facebook-square"></i> <span class="font-weight-bold">Facebook</span></button>
							<button type="submit" class="btn btn-info mt-2"><i class="fab fa-twitter-square"></i> <span class="font-weight-bold">Twitter</span></button>
						</div>
						<p class="mt-3 mb-1 text-center">Dont have a account ? <a href="#" class="text-decoration-none">Register</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="./src/js/popper.min.js"></script>
    <script src="./src/vendor/bootstrap-v5/js/bootstrap.min.js"></script>
</body>
</html>
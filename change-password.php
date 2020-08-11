<!DOCTYPE html>
<html lang="en">
<head>
	<title>Change New Password</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./src/vendor/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="./src/vendor/bootstrap-v5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/app.css">
</head>
<body class="bg-primary">
	<noscript>Your browser does not support javascript!</noscript>
	<div class="container mt-5 mb-3">
		<div class="col-md-6 offset-sm-0 offset-md-3">
			<div class="card shadow">
				<div class="card-body">
					<h5 class="text-center font-weight-bold mb-4">Change New Password</h5>
					<form>
						<div class="mt-3">
							<label for="name">Token</label>
							<textarea name="token" class="form-control" placeholder="Token" aria-label="token" minlength="3" maxlength="100" required></textarea>
						</div>
						<div class="mt-3">
							<label for="password">New Password</label>
							<input type="password" name="password" class="form-control" placeholder="New Password" aria-label="password" minlength="8" maxlength="20" autocomplete="off" required>
						</div>
						<div class="mt-3">
							<label for="verified-password">New Password Verification</label>
							<input type="password" name="password-confirmed" class="form-control" placeholder="New Verified Password" aria-label="password-confirmed" minlength="8" maxlength="20" autocomplete="off" required>
						</div>
						<button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="./src/js/popper.min.js"></script>
    <script src="./src/vendor/bootstrap-v5/js/bootstrap.min.js"></script>
</body>
</html>
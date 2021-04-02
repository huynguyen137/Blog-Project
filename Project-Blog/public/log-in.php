<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/main-style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/login-style.css">
	<link href='https://fonts.googleapis.com/css?family=Quattrocento Sans' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'>
</head>
<body>
    <?php include '../private/user-valid.php'; ?>
	<div>
		<center>
			<div class="logo">
				<a href="home.php"><img src="../assets/images/blog-logo.png" alt="Logo"></a>
			</div>
			<div>
				<p class="quattro-font px40 black-txt bold">Login</p>
			</div>
			<div class="log-in">
				<form method="post" action="../private/run-login.php">
					<div>
						<input type="text" name="username" placeholder="Username" required>
					</div>
					<div>
						<input type="password" name="password" placeholder="Password" required>
					</div>
					<div>
						<button type="submit" class="quattro-sans-font px20 bold upper">Log in</button>
					</div>
				</form>
			</div>
		</center>
	</div>
</body>
</html>
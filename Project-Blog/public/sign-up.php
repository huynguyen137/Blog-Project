<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/main-style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/new-style.css">
	<link href='https://fonts.googleapis.com/css?family=Quattrocento Sans' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'>
</head>
<style>
	.err_login{color: red}
</style>
<body>
	<?php include '../private/user-valid.php'; ?>
	<div>
		<center>
			<div class="logo">
				<a href="home.php"><img src="../assets/images/blog-logo.png" alt="Logo"></a>
			</div>
			<div>
				<p class="quattro-font px40 bold black-txt ">Create a new account</p>
				<p class="quattro-sans-font px20 bold black-txt">Already had an account? <a href="log-in.php" class="red-txt decor-none">Log in here</a></p>
			</div>
			<div class="sign-in">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
					<div>
						<input class="quattro-sans-font px20" type="text" name="fullname" placeholder="Fullname" value="<?php echo htmlspecialchars($fullname) ?>">
						<span class="err_login"><?php echo htmlspecialchars($error['fname_err']); ?></span>
					</div>
					<div>
						<input class="quattro-sans-font px20" type="text" name="username" placeholder="Username" value="<?php echo htmlspecialchars($username) ?>">
						<span class="err_login"><?php echo htmlspecialchars($error['uname_err']); ?></span>
					</div>
					<div>
						<input class="quattro-sans-font px20" type="password" name="password" placeholder="Password" value="<?php echo htmlspecialchars($password) ?>">
						<span class="err_login"><?php echo htmlspecialchars($error['pwd_err']); ?></span>
					</div>
					<div>
						<input class="quattro-sans-font px20" type="password" name="re-password" placeholder="Enter password again" value="<?php echo htmlspecialchars($re_password) ?>">
						<span class="err_login"><?php echo htmlspecialchars($error['re_pwd_err']); ?></span>
					</div>
					<div class="flex-wrap-center">
						<input type="checkbox" name="check" class="checkbox" id="checkbox">
						<label for="checkbox" class="quattro-sans-font px24 bold">I agree to the<a href="" class="red-txt decor-none"> Terms and Conditions</a> of <a href="" class="red-txt decor-none">Tech Talk</a></label>
					</div>
					<div>
						<button type="submit" name="submit" class="bold px20 quattro-sans-font bold">Sign Up</button>
					</div>
				</form>
			</div>
		</center>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/main-style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/">
	<link href='https://fonts.googleapis.com/css?family=Quattrocento Sans' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'>
</head>
<body>
	<?php include '../private/user-valid.php'; ?>
	<div>
		<center>
			<div>
				<p>Create An Account</p>
			</div>
			<div>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<div>
						<input type="text" name="fullname" placeholder="Fullname" value="<?php echo htmlspecialchars($fullname) ?>">
						<span><?php echo htmlspecialchars($error['fname_err']); ?></span>
					</div>
					<div>
						<input type="text" name="username" placeholder="Username" value="<?php echo htmlspecialchars($username) ?>">
						<span><?php echo htmlspecialchars($error['uname_err']); ?></span>
					</div>
					<div>
						<input type="password" name="password" placeholder="Password" value="<?php echo htmlspecialchars($password) ?>">
						<span><?php echo htmlspecialchars($error['pwd_err']); ?></span>
					</div>
					<div>
						<input type="password" name="re-password" placeholder="Enter password again" value="<?php echo htmlspecialchars($re_password) ?>">>
						<span><?php echo htmlspecialchars($error['re_pwd_err']); ?></span>
					</div>
					<div>
						<input type="check-box" name="check">
						<p>I agree to the<a href=""> Terms and Conditions</a> of <a href="">Tech Talk</a></p>
					</div>
					<div>
						<button type="submit" name="submit" class="" disabled>Sign Up</button> <!-- Disable if check box isnt checked -->
					</div>
				</form>
			</div>
		</center>
	</div>
</body>
</html>
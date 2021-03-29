<?php
	$fullname = $username = $password = $re_password = "";
	$error = array("fname_err" => "", "uname_err" => "", "pwd_err" => "", "re_pwd_err" => "");

	if (isset($_POST['submit'])) {
		if(empty($_POST['fullname'])) {
			$error['fname_err'] = "Enter your name!";
		} else {
			$fullname = $_POST['fullname'];
			if(!preg_match('/^[a-zA-Z]/', $fullname)) {
				$error['fname_err'] = "Invalid name!";
			}
		}

		if(empty($_POST['username'])) {
			$error['uname_err'] = "Enter username!";
		} else {
			$username = $_POST['username'];
			if(!preg_match('/^[a-zA-Z]/', $username)) {
				$error['uname_err'] = "Invalid username!";
			}
		}

		if (empty($_POST['password'])) {
			$error['pwd_err'] = "Password is required";
		} else {
			$password = $_POST['password'];
			if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password)) {
				$error['pwd_err'] = "Password must contain letters, capitalized letters, numbers and at least 8 characters long";
			}
		}

		if (empty($_POST['re-password'])) {
			$error['re_pwd_err'] = "You need to re-enter your password";
		} else {
			$re_password = $_POST['re-password'];
			if ($re_password != $password) {
				$error['re_pwd_err'] = "Doesn't match the password you entered";
			}
		}

		if(array_filter($error)) {
			
		} else {
			include './new-user.php';
			header('location: ./home.php');
		}
	}
 ?>

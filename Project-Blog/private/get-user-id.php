<?php 
	session_start();
	$tmp = $_SESSION['username'];
	$READ = "SELECT * FROM user WHERE username = '$tmp'";
	$take = $con->query($READ);

	$print = $take->fetch_assoc();
	$take_id = $print['user_id'];

	
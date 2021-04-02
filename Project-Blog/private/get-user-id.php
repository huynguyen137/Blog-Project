<?php 
	$READ = "SELECT user_id FROM User WHERE username= '$_SESSION['username']'";
	$take = $conn->query($READ);

	$print = $take->fetch_assoc();
	$take_id = $print['user_id'];
<?php 
	include_once 'db-connect.php';

	$INSERT = "INSERT INTO User(Fullname, Username, Password)
	VALUES (?, ?, ?)";

	$stmt= $conn->prepare($INSERT);
	$stmt->bind_param("sss",$insert_fullname ,$insert_username ,$insert_password);

	$insert_fullname = $_POST['fullname'];
	$insert_username = $_POST['username'];
	$insert_password = $_POST['password'];
	$stmt->execute();

	$stmt->close();
	$conn->close();
 ?>
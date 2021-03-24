<?php 
	include_once 'db-connect.php';

	$INSERT = "INSERT INTO User(Fullname, Username, Password)
	VALUES (?, ?, ?)";

	$stmt= $conn->prepare($INSERT);
	$stmt->bind_param("sss",$fullname ,$username ,$password);

	$ = $_POST['fullname'];
	$ = $_POST['username'];
	$ = $_POST['password'];
	$stmt->execute();

	$stmt->close();
	$conn->close();
 ?>
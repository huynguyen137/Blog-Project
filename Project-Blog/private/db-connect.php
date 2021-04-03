<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'myDB';

$con = new mysqli($server, $username, $password, $dbname);
	if($con->connect_error) {
		die("Connection failed: " .$conn->connect_error);
	}
?>
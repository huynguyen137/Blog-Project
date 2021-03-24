<?php 
	$SERVER = "localhost";
	$USERNAME = "root";
	$PASSWORD = "";
	$DBNAME = "myDB";

	$conn = new mysqli($SERVER, $USERNAME, $PASSWORD, $DBNAME);
	if($conn->connect_error) {
		die("Connection failed: " .$conn->connect_error);
	}
 ?>
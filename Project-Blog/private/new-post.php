<?php 
	include_once 'db-connect.php';

	$INSERT = "INSERT INTO Post(Title, Category, Content, Image)
	VALUES (?, ?, ?, ?)";

	$stmt= $conn->prepare($INSERT);
	$stmt->bind_param("ssss",$insert_title ,$insert_cate ,$insert_content, $insert_image);

	$insert_title = $_POST['title'];
	$insert_cate = $_POST['cate'];
	$insert_content = $_POST['content'];
	$insert_image = $_POST['image'];
	$stmt->execute();

	$stmt->close();
	$conn->close();

	header('location:../public/home.php');
 ?>
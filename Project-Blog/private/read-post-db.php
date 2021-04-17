<?php 
	include_once 'db-connect.php';

	$define = $_GET['id'];
	$READ1 = "SELECT * FROM post WHERE post_id = '$define' ";
	$print1 = $con->query($READ1);
	if($print1->num_rows > 0) {
		$blp1 = $print1->fetch_assoc();
		$blp_cate = $blp1['cate_id'];
		$READ2 = "SELECT * FROM cate WHERE cate_id= '$blp_cate'";
		$print2 = $con->query($READ2);
		if($print2->num_rows > 0) {
			$blp2 = $print2->fetch_assoc();
		}
		$blp_user = $blp1['user_id'];
		$READ3 = "SELECT fullname,user_id FROM user WHERE user_id= '$blp_user'";
		$print3 = $con->query($READ3);
		if ($print3->num_rows > 0) {
			$blp3 = $print3->fetch_assoc();
		}
	}
	

	
 ?>
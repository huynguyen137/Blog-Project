<?php 
	include 'db-connect.php';

	$READ4 = "SELECT * FROM cmts WHERE post_id= $define ORDER BY cmt_id DESC";
	$print4 = $con->query($READ4);
	if($print4->num_rows > 0 ) {
		$blp4 =$print4->fetch_assoc();
		$blp_uid = $blp4['user_id'];
		$READ5 = "SELECT fullname FROM user WHERE user_id = $blp_uid";
		$print5 = $con->query($READ5);
		if ($print5->num_rows > 0 ) {
			$blp5 = $print5->fetch_assoc();
		}
	}
 ?>
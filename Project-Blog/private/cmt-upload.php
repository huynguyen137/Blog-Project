<?php 
	include 'db-connect.php';
	date_default_timezone_set("Asia/Ho_Chi_Minh");

	$upload_cmt = $upload_date = $upload_id =  "";
	if (isset($_POST['submit'])) {
		$UPLOAD = "INSERT INTO cmts (cmt_content, cmt_date, post_id,user_id) VALUES (?,?,?,?)";

		$stmt= $con->prepare($UPLOAD);
		$stmt->bind_param("ssis",$upload_cmt, $upload_date, $upload_id,$upload_user);

		$upload_cmt = $_POST['comment'];
		$upload_date = date('Y-m-d H:i:s');
		$upload_id = $_POST['post_id'];
		$upload_user = $_POST['user_id'];

		$stmt->execute();

		$stmt->close();
		$con->close();
		header("location: ../public/blog-post.php?id=$upload_id");
	}
 ?>
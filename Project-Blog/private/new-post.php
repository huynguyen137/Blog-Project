<?php 
	if(isset($_POST['upload'])) {
		include_once 'db-connect.php';
		include_once 'img-check.php';
		include_once 'get-user-id.php';

		if ($img_error === 0 && isset($take_id)) {
			$INSERT = "INSERT INTO post(cate_id, title, content, image_url, user_id)
			VALUES (?, ?, ?, ?, ?)";

			$stmt= $con->prepare($INSERT);
			$stmt->bind_param("isssi",$insert_cate ,$insert_title ,$insert_content, $insert_image, $insert_user_id);

			$insert_title = $_POST['title'];
			$insert_cate = $_POST['cate'];
			$insert_content = $_POST['content'];
			$insert_image = $img_url;
			$insert_user_id = $take_id;
			$stmt->execute();

			$stmt->close();
			$con->close();

			header('location:../public/home-login.php');
		}
	}
 ?>
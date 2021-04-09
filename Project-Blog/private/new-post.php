<?php 
	if(isset($_POST['upload'])) {
		include_once 'db-connect.php';
		include_once 'img-check.php';
		include_once 'get-user-id.php';
		date_default_timezone_set("Asia/Ho_Chi_Minh");
 
		$insert_title= $insert_cate = $insert_content = $insert_image = $insert_date = $insert_user_id = $insert_view = "";

		if ($img_error === 0 && isset($take_id)) {
			$INSERT = "INSERT INTO post(cate_id, title, content, image_url, post_date, user_id, post_view)
			VALUES (?, ?, ?, ?, ?, ?, ?)";

			$stmt= $con->prepare($INSERT);
			$stmt->bind_param("issssii",$insert_cate ,$insert_title ,$insert_content, $insert_image, $insert_date, $insert_user_id, $insert_view);

			$insert_title = $_POST['title'];
			$insert_cate = $_POST['cate'];
			$insert_content = $_POST['content'];
			$insert_image = $img_url;
			$insert_date = date('Y-m-d H:i:s');
			$insert_user_id = $take_id;
			$insert_view = 0;
			$stmt->execute();

			
			if($stmt->execute() == true) {
				header('location:../public/home-login.php');
			} else {
				echo "Error.";
			}
			$stmt->close();
			$con->close();
		}
	}
 ?>
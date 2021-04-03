<?php 
	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$img_tmp_name = $_FILES['image']['tmp_name'];
	$img_error = $_FILES['image']['error'];
	$error_message = '';
	$valid_extension = array("jpg", "jpeg", "png");

	if ($img_error === 0) {
		if($img_size > 150000) {
			$error_message = "Your image size is too big!";
			header('location: ../public/add-new-post.php?error=$error_message');
		} else {
			$img_extension = pathinfo($img_name, PATHINFO_EXTENSION);
			$ex_to_lower = strtolower($img_extension);

			if(!in_array($ex_to_lower, $valid_extension)) {
				$error_message = "You cannot upload this type of file!";
				header('location: ../public/add-new-post.php?error=$error_message');
			} else {
				// $new_img_name = uniqid("tt-img-", true) .'.'.$ex_to_lower;
				$img_url = '../assets/images/' .$img_name;
				move_uploaded_file($img_tmp_name, $img_url);
			}
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add a new post</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/main-style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/new-style.css">
	<link href='https://fonts.googleapis.com/css?family=Quattrocento Sans' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'>
</head>
<body>
	<div>
		<form method="post" action="../private/new-post.php">
			<div>
				<input type="text" name="title" placeholder="Title (at least 15 characters)" required minlength="15">
			</div>
			<div>
				<select name="cate" required>
					<option hidden>Choose post's category</option>
					<option value="cate1">Category 1</option>
					<option value="cate2">Category 2</option>
					<option value="cate3">Category 3</option>
					<option value="cate4">Category 4</option>
				</select>
			</div>
			<div>
				<textarea class="" placeholder="Content" name="content" required></textarea>
			</div>
			<div>
				<label for="img-file">Choose an image</label>
				<input id="img-file" type="file" name="image" required="">
			</div>
			<div>
				<button type="submit" name="upload" class="">Post</button>
			</div>
		</form>
	</div>
</body>
</html>
<?php session_start() ?>
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
	<?php 
	if (isset($_GET['error'])) {
		$pop_up = $_GET['error'];
		echo "<script type='text/javascript'>alert('$pop_up');</script>";
	}  ?>
	<div>
		<center>
			<div class="top-header">
					<nav>
						<ul>
							<div class="hovering">
								<li class="nav-unit list-none">
									<a href="<?php if(isset($_SESSION['username'])) {
						                                echo "home-login.php";
						                            } else {
						                                echo "home.php";
						                            } ?>"
 									   class="quattro-sans-font px24 decor-none black-txt bold">Newest Posts</a>
								</li>
							</div>
							<div class="dropdown hovering">
								<li class="nav-unit list-none"><a href="" class="quattro-sans-font px24 decor-none black-txt bold">Categories</a></li>
								<div class="dropdown-content">
                                        <a href="<?php if(isset($_SESSION['username'])) {
                                                            echo "home-login.php";
                                                        } else {
                                                            echo "home.php";
                                                        } ?>"
                                        class="quattro-sans-font px20 list-none decor-none black-txt">All</a>
                                        <a href="cate-phone.php" class="quattro-sans-font px20 list-none decor-none black-txt">Vehicle</a>
                                        <a href="cate-pc.php" class="quattro-sans-font px20 list-none decor-none black-txt">Phone</a>
                                        <a href="cate-vh.php" class="quattro-sans-font px20 list-none decor-none black-txt">PC & Laptop</a>
                                    </div>
							</div>
						</ul>
					</nav>
					<div class="logo">
                            <a href="<?php if(isset($_SESSION['username'])) {
                                echo "home-login.php";
                            } else {
                                echo "home.php";
                            } ?>"><img src="../assets/images/blog-logo.png" alt="Logo"></a>
                        </div>
					<div class="social">
						<ul>
							<div>
								<li class="list-none nav-unit"><img src="../assets/images/fb-icon.png" alt="Social" class="icon"><a href="fb.com" class=" quattro-sans-font px24 black-txt bold decor-none">Facebook</a></li>
							</div>
							<div>
								<li class="list-none nav-unit"><img src="../assets/images/ins-icon.png" alt="Social" class="icon"><a href="instagram.com" class=" quattro-sans-font px24 black-txt bold decor-none">Instagram</a></li>
							</div>
						</ul>
					</div>
				</div>
		</center>
		<div class="new-post-header">
			<p class="quattro-font px53 bold black-txt">Add a new post</p>
		</div>
		<div class="new-post">
			<form method="post" action="../private/new-post.php" enctype="multipart/form-data" autocomplete="off">
				<div class="main-part">
					<div>
						<input type="text" name="title" placeholder="    Title (at least 15 characters)" required minlength="15" class="px40 bold quattro-font focus-none" value="<?php echo htmlspecialchars($insert_title) ?>">
					</div>
					<div>
						<textarea placeholder="Content" name="content" required class="quattro-sans-font px30"></textarea>
					</div>
				</div>
				<div class="side-part">
					<div>
						<select name="cate" class="cate-group px20 quattro-sans-font bold" required>
							<option hidden>Choose post's category</option>
							<option value="1">Vehicle</option>
							<option value="2">Phone</option>
							<option value="3">PC & Laptop</option>
						</select>
					</div>
					<div class="file">
						<label for="img-file" class="quattro-sans-font px20 bold">Choose an image</label>
						<input id="img-file" type="file" name="image" required="" class="focus-none">
					</div>
					<div>
						<button type="submit" name="upload" class="focus-none upper bold">Post</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
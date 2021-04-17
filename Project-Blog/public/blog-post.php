<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bài viết</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/main-style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/post-style.css">
	<link href='https://fonts.googleapis.com/css?family=Quattrocento Sans' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'>
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="top-header">
					<nav>
						<ul>
							<div class="dropdown hovering">
                                    <li class="nav-unit list-none"><a href="" class="quattro-sans-font px24 decor-none black-txt bold">Main Menu</a></li>
                                    <div class="dropdown-content">
                                        <a href="" class="quattro-sans-font px20 list-none decor-none black-txt">Profile</a>
                                        <a href="add-new-post.php" class="quattro-sans-font px20 list-none decor-none black-txt">Post a Blog</a>
                                    </div>
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
                                        <a href="cate-phone.php" class="quattro-sans-font px20 list-none decor-none black-txt">Phone</a>
                                        <a href="cate-pc.php" class="quattro-sans-font px20 list-none decor-none black-txt">PC & Laptop</a>
                                        <a href="cate-vh.php" class="quattro-sans-font px20 list-none decor-none black-txt">Vehicle</a>
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
				<?php if (isset($_GET['id'])) {
					include '../private/read-post-db.php';
					$view = $blp1['post_view'] + 1;

					$UPDATE = "UPDATE post SET post_view='$view' WHERE post_id='$define'";
					$push= $con->query($UPDATE);

				?>
				<div class="post-introduction" style="background-image: url(<?php echo $blp1['image_url']; ?>);background-repeat: no-repeat;background-size: cover;">
					<div class="slider" >
						<div class="intro-area">
								<div class="intro-post">
									<div class="breadcrumbs">
										<ul>
											<li class="list-none bread-item"><a class=" bread-link white-txt decor-none px12 bold quattro-sans-font" href="home.php">Home</a></li>
											<li class="list-none bread-item"><a class="active bread-link decor-none px12 bold quattro-sans-font" href=""><?php echo $blp2['cate_name']; ?></a></li>
										</ul>
									</div>
									<div class="post-title">
										<p class="quattro-font px53 white-txt"><?php echo $blp1['title']; ?></p>
									</div>
								</div>
						</div>
					</div>
				</div>
		</header>
		<div class="wrap-content">
			<div class="content">
				<section>
					<div class="post-content"> <!-- Mẫu với nội dung cơ bản -->
						<div class="post-txt">
							<pre class="quattro-sans-font px17 "><?php echo $blp1['content']; ?></pre><br>
						</div>
						<div class="post-side-info">
							<div class="signature">
								<b class="quattro-sans-font px20"><?php echo $blp3['fullname']; ?></b>
							</div>
							<div>
								<div>
									<i class="quattro-sans-font px17"><?php echo $blp1['post_date']; ?></i>
								</div>
								<div class="view-counter float-right">
									<img src="../assets/images/eye-icon.png" alt="eye-icon">
									<p class="quattro-sans-font px12"><?php echo $view; ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
					<div class="refer-post"> <!-- Các bài viết tham khảo -->
						<div>
							<a class="decor-none px22 quattro-font black-txt" href="">Refer post title</a>
						</div>
						<div>
							<a class="decor-none px22 quattro-font black-txt" href="">Refer post title</a>
						</div>
						<div>
							<a class="decor-none px22 quattro-font black-txt" href="">Refer post title</a>
						</div>
					</div>
					<div class="comment-show"> <!-- Các comment của bài viết -->
						
						
						<?php 
                                include_once '../private/db-connect.php';

                                $READ4 = "SELECT * FROM cmts WHERE post_id= $define ORDER BY cmt_id DESC";
                                $print4 = $con->query($READ4);
                        
	                            if ($print4->num_rows > 0 ) { ?>

	                    <div class="comment-counter">
							<p class="quattro-sans-font bold px22 black-txt">123 comments</p> <!-- Đếm số bình luận, code lại phần đếm số -->
						</div>

	                    <?php   while ($blp4 =$print4->fetch_assoc()) { ?>
						<div class="comment-list">
							<div>
								<div>
									<p class="quattro-sans-font px17 bold black-txt">
										<?php
											$blp_uid = $blp4['user_id'];
											$READ5 = "SELECT fullname FROM user WHERE user_id = $blp_uid";
											$print5 = $con->query($READ5);
											if ($print5->num_rows > 0 ) {
												while($blp5 = $print5->fetch_assoc()){
													echo $blp5['fullname'];
												}
											} 
									 	?></p>
									<p class="quattro-sans-font px12 bold red-txt">Posted <?php echo $blp4['cmt_date']; ?></p>
								</div>
								<div>
									<p class="quattro-sans-font px17 black-txt"><?php echo $blp4['cmt_content']; ?></p>
								</div>
								<div class="reply">
									<button type="button" class="quattro-sans-font reply-button upper px17 bold">Reply</button>
								</div>
							</div>

						<?php } }else{?>

						<div class="comment-list">
							<div>
								<div>
									<p class="quattro-sans-font px22 bold black-txt">No comments yet.</p>
								</div>
							</div>
						</div>

						<?php } ?>

						</div>
					</div>
					<?php include '../private/cmt-upload.php'; ?>
					<div class="comment-field"> <!-- Comment bài viết, code lại để người dùng đăng nhập mới được cmt -->
						<div>
							<p class="quattro-sans-font px22 bold black-txt">Post a comment</p>
						</div>
						<?php if(!isset($_SESSION['username'])) { ?>
						<div>
							<p class="quattro-sans-font px30 bold">Please <a href="log-in.php" class="red-txt decor-none">log in</a> to post a comment</p>
						</div>
						<?php }else{ ?>
						<div>
							<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
								<input type="text" name="post_id" class="dplay-none" value="<?php echo $blp1['post_id']; ?>">
								<input type="text" name="user_id" class="dplay-none" value="<?php echo $blp3['user_id']; ?>">
								<textarea placeholder="Write a comment" class="cmt-field px20" name="comment"></textarea>
								<button type="submit" name="submit" class="submit-button upper">Post</button>
							</form>
						</div>
						<?php } ?>
					</div>
				</section>


				<aside class="side-content"> <!-- Show các bài viết nổi bật -->
					
					<div class="side-title">
						<p class="black-txt px24 quattro-font bold upper">Most popular</p>
					</div>
					<?php 
						include '../private/db-connect.php';

						$READ6 = "SELECT cate_id,title,image_url,post_view FROM post ORDER BY post_view DESC";
						$print6 = $con->query($READ6);
						$i = 0;

						if($print6->num_rows >0) {
							while ($popular = $print6->fetch_assoc()) {
					?>
					<div class="small-pre-post-link">
						<div class="small-pre-post-thumb">
							<a href=""><img src="<?php echo $popular['image_url']; ?>" alt="Bài viết"></a>
						</div>
						<div class="small-pre-post-txt">
							<div class="small-pre-post-title">
								<div class="small-pre-post-cate">
									<a href="" class="red-txt quattro-sans-font px12 decor-none bold">
										<?php 
											$key_cate = $popular['cate_id'];
											$READ7 = "SELECT cate_name FROM cate WHERE cate_id = $key_cate";
											$print7 = $con->query($READ7);
											if($print7->num_rows>0) {
												while ($popular_cate = $print7->fetch_assoc()) {
													echo $popular_cate['cate_name'];
												}
											}
										?>	
									</a>
								</div>
								<div>
									<a href="" class="black-txt quattro-font px18 decor-none bold px22 txt-ovfl"><?php echo $popular['title']; ?></a>
								</div>
							</div>
							<div class="view-counter">
								<img src="../assets/images/eye-icon.png" alt="Số lượt xem bài viết">
								<p class="black-txt quattro-sans-font px12"><?php echo $popular['post_view']; ?></p>
							</div>
						</div>
					</div>
					<?php }} ?>
					<div class="side-subscribe">
						<div>
							<p class="px20 quattro-sans-font bold black-txt">Newsletter</p>
						</div>
						<div>
							<form method="post" action="">
								<input type="text" name="fname" class="input" placeholder="Name">
								<input type="email" name="mail" class="input" placeholder="Email">
								<button type="submit" name="submit" class="submit-button upper">Subscribe</button>
							</form>
						</div>
					</div>
				</aside>
			</div>
		</div>
		<footer>
			<div class="wrap-info">
					<div class="infomation">
						<div class="copy">
							<p class="white-txt px30 quattro-sans-font upper">Tech Talk</p>
							<p class="white-txt px17 quattro-sans-font">© 2021, All Rights Reserved.</p>
						</div>
						<div class="category">
							<div class="info-cate">
								<div>
									<a href="" class="white-txt quattro-sans-font px17 decor-none">techtalk@gmail.com</a>
								</div>
								<div>
									<a href="" class="white-txt quattro-sans-font px17 decor-none">0987654321</a>
								</div>
								<div>
									<a href="" class="white-txt quattro-sans-font px17 decor-none">Ha Noi, Viet Nam</a>
								</div>
								<div>
									<a href="" class="white-txt quattro-sans-font px17 decor-none">Tech Talk forum</a>
								</div>
							</div>
							<div class="post-cate">
								<div>
									<a href="" class="white-txt quattro-sans-font px17 decor-none">Category</a>
								</div>
								<div>
									<a href="" class="white-txt quattro-sans-font px17 decor-none">Category</a>
								</div>
							</div>
						</div>
					</div>
				</div>
		</footer>
	</div>
</body>
</html>
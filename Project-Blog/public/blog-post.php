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
						<div class="comment-counter">
							<p class="quattro-sans-font bold px22 black-txt">123 comments</p> <!-- Đếm số bình luận, code lại phần đếm số -->
						</div>
						<div class="comment-list">
							<div>
								<div>
									<p class="quattro-sans-font px17 bold black-txt">Username</p>
									<p class="quattro-sans-font px12 bold red-txt">Posted 12:48pm</p>
								</div>
								<div>
									<p class="quattro-sans-font px17 black-txt">The preservation of human life is the ultimate value, a pillar of ethics and the foundation of all morality. This held true in most cultures and societies throughout history.</p>
								</div>
								<div class="reply">
									<button type="button" class="quattro-sans-font reply-button upper px17 bold">Reply</button>
								</div>
							</div>
							<div>
								<div>
									<p class="quattro-sans-font px17 bold black-txt">Username</p>
									<p class="quattro-sans-font px12 bold red-txt">Posted 12:48pm</p>
								</div>
								<div>
									<p class="quattro-sans-font px17 black-txt">The preservation of human life is the ultimate value, a pillar of ethics and the foundation of all morality. This held true in most cultures and societies throughout history.</p>
								</div>
								<div class="reply">
									<button type="button" class="quattro-sans-font reply-button upper px17 bold">Reply</button>
								</div>
							</div>
							<div>
								<div>
									<p class="quattro-sans-font px17 bold black-txt">Username</p>
									<p class="quattro-sans-font px12 bold red-txt">Posted 12:48pm</p>
								</div>
								<div>
									<p class="quattro-sans-font px17 black-txt">The preservation of human life is the ultimate value, a pillar of ethics and the foundation of all morality. This held true in most cultures and societies throughout history.</p>
								</div>
								<div class="reply">
									<button type="button" class="quattro-sans-font reply-button upper px17 bold">Reply</button>
								</div>
							</div>
						</div>
					</div>
					<div class="comment-field"> <!-- Comment bài viết, code lại để người dùng đăng nhập mới được cmt -->
						<div>
							<p class="quattro-sans-font px22 bold black-txt">Post a comment</p>
						</div>
						<div class="dplay-none"><p>Please <a href="">log in</a> to post a comment</p></div>
						<div>
							<form method="post" action="">
								<textarea placeholder="Write a comment" class="cmt-field px20" name="comment"></textarea>
								<button type="submit" name="submit" class="submit-button upper">Post</button>
							</form>
						</div>
					</div>
				</section>
				<aside class="side-content"> <!-- Show các bài viết nổi bật -->
					<div class="side-title">
						<p class="black-txt px24 quattro-font bold upper">Most popular</p>
					</div>
					<div class="small-pre-post-link">
						<div class="small-pre-post-thumb">
							<a href=""><img src="../assets/images/cover3.jpg" alt="Bài viết"></a>
						</div>
						<div class="small-pre-post-txt">
							<div class="small-pre-post-title">
								<div class="small-pre-post-cate">
									<a href="" class="red-txt quattro-sans-font px12 decor-none bold">Category</a>
								</div>
								<div>
									<a href="" class="black-txt quattro-font px18 decor-none bold px22">Post title</a>
								</div>
							</div>
							<div class="view-counter">
								<img src="../assets/images/eye-icon.png" alt="Số lượt xem bài viết"> <!-- Ảnh con mắt -->
								<p class="black-txt quattro-sans-font px12">123</p> <!-- Hiện số lượt xem bài viết, sửa lại bằng JS -->
							</div>
						</div>
					</div>
					<div class="small-pre-post-link">
						<div class="small-pre-post-thumb">
							<a href=""><img src="../assets/images/cover3.jpg" alt="Bài viết"></a>
						</div>
						<div class="small-pre-post-txt">
							<div class="small-pre-post-title">
								<div class="small-pre-post-cate">
									<a href="" class="red-txt quattro-sans-font px12 decor-none bold">Category</a>
								</div>
								<div>
									<a href="" class="black-txt quattro-font px18 decor-none bold px22">Post title</a>
								</div>
							</div>
							<div class="view-counter">
								<img src="../assets/images/eye-icon.png" alt="Số lượt xem bài viết"> <!-- Ảnh con mắt -->
								<p class="black-txt quattro-sans-font px12">123</p> <!-- Hiện số lượt xem bài viết, sửa lại bằng JS -->
							</div>
						</div>
					</div>
					<div class="small-pre-post-link">
						<div class="small-pre-post-thumb">
							<a href=""><img src="../assets/images/cover3.jpg" alt="Bài viết"></a>
						</div>
						<div class="small-pre-post-txt">
							<div class="small-pre-post-title">
								<div class="small-pre-post-cate">
									<a href="" class="red-txt quattro-sans-font px12 decor-none bold">Category</a>
								</div>
								<div>
									<a href="" class="black-txt quattro-font px18 decor-none bold px22">Post title</a>
								</div>
							</div>
							<div class="view-counter">
								<img src="../assets/images/eye-icon.png" alt="Số lượt xem bài viết"> <!-- Ảnh con mắt -->
								<p class="black-txt quattro-sans-font px12">123</p> <!-- Hiện số lượt xem bài viết, sửa lại bằng JS -->
							</div>
						</div>
					</div>
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
<!DOCTYPE html>
<html>
<head>
	<title>Bài viết</title>
	<link rel="stylesheet" type="text/css" href="../assets/home-style.css">
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="top-header">
				<nav>
					<ul>
						<div>
							<li><a href="">Mới nhất</a></li>
						</div>
						<div>
							<li><a href="">Điều hướng</a></li>
							<ul> <!-- Phần này ẩn đi, khi hover vào điều hướng sẽ hiện ra -->
								<li><a href="">Danh mục</a></li>
								<li><a href="">Danh mục</a></li>
								<li><a href="">Danh mục</a></li>
								<li><a href="">Danh mục</a></li>
							</ul>
						</div>
					</ul>
				</nav>
				<div class="logo">
					<a href=""><img src="" alt="Logo"></a>
				</div>
				<div class="social">
					<ul>
						<div>
							<li><a href="">Social</a></li>
						</div>
						<div>
							<li><a href="">Social</a></li>
						</div>
						<div>
							<li><a href="">Social</a></li>
						</div>
					</ul>
				</div>
			</div>
		</header>
		<div class="content">
			<section>
				<div class="breadcums"> <!-- Cần code lại -->
					<ul>
						<li><a href="">Trang chủ</a></li>
						<li><a href="">Tên thư mục</a></li>
					</ul>
				</div>
				<div class="post-content"> <!-- Mẫu với nội dung cơ bản -->
					<div class="post-img">
						<img src="" alt="Ảnh bài viết">
					</div>
					<div class="post-txt">
						<p class="">Nội dung bài viết</p>
					</div>
				</div>
				<div class="refer-post"> <!-- Các bài viết tham khảo -->
					<div>
						<a href="">Tên bài viết</a>
					</div>
					<div>
						<a href="">Tên bài viết</a>
					</div>
					<div>
						<a href="">Tên bài viết</a>
					</div>
				</div>
				<div class="comment-show"> <!-- Các comment của bài viết -->
					<div>
						<p>123 bình luận</p> <!-- Đếm số bình luận, code lại phần đếm số -->
					</div>
					<div>
						<div>
							<p>Tên người dùng</p>
							<p>Thời gian comment</p>
							<button type="button" class="reply-button">Trả lời</button>
						</div>
						<div>
							<p>Nội dung comment</p>
						</div>
					</div>
				</div>
				<div class="comment-field"> <!-- Comment bài viết, code lại để người dùng đăng nhập mới được cmt -->
					<div>
						<form method="post" action="">
							<textarea placeholder="Bình luận về bài viết" class="cmt-field" name="comment"></textarea>
							<button type="submit" name="submit" class="submit-button">Gửi bình luận</button>
						</form>
					</div>
				</div>
			</section>
			<aside class="side-content"> <!-- Show các bài viết nổi bật -->
				<div class="">
					<p>Các bài viết nổi bật</p>
				</div>
				<div class="small-pre-post-link">
					<div class="small-pre-post-thumb">
						<a href=""><img src="" alt="Bài viết"></a>
					</div>
					<div class="small-pre-post-txt">
						<div class="small-pre-post-title">
							<a href="">Tiêu đề bài viết</a>
						</div>
						<div class="view-counter">
							<img src="" alt="Số lượt xem bài viết"> <!-- Ảnh con mắt -->
							<p>123</p> <!-- Hiện số lượt xem bài viết, sửa lại bằng JS -->
						</div>
					</div>
				</div>
				<div class="side-subscribe">
					<div>
						<p>Đăng ký nhận tin</p>
						<p>Bạn sẽ nhận được email cho mỗi 10 bài viết mới</p>
					</div>
					<div>
						<form method="post" action="">
							<input type="text" name="fname" class="input" placeholder="Họ và tên">
							<input type="email" name="mail" class="input" placeholder="Email">
							<button type="submit" name="submit" class="submit-button">Đăng ký</button>
						</form>
					</div>
				</div>
			</aside>
		</div>
		<footer>
			<div class="infomation">
				<div class="copy">
					<p>Blog 2021</p>
					<p>Bản quyền thuộc về .</p>
				</div>
				<div class="category">
					<div class="info-cate">
						<div>
							<a href="">Danh mục</a>
						</div>
						<div>
							<a href="">Danh mục</a>
						</div>
						<div>
							<a href="">Danh mục</a>
						</div>
						<div>
							<a href="">Danh mục</a>
						</div>
					</div>
					<div class="post-cate">
						<div>
							<a href="">Danh mục</a>
						</div>
						<div>
							<a href="">Danh mục</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>
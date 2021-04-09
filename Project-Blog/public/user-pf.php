<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User's name</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/main-style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/user-style.css">
    <link href='https://fonts.googleapis.com/css?family=Quattrocento Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'>
</head>
<body>
	<div class="wrapper">
	    <header>
	        <div class="top-header">
	            <nav>
	                <ul>
	                    <div class="hovering">
	                        <li class="nav-unit list-none"><a href="add-new-post.php" class="quattro-sans-font px24 decor-none black-txt bold">Post a Blog</a></li>
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
	    </header>
	    <section>
	    	<div> <!-- user info -->
	    		<div>
	    			<img src="" alt=""> <!-- profile pic -->
	    		</div>
	    		<div>
	    			<p>Fullname</p>
	    		</div>
	    	</div>
	    	<div> <!-- user's posts -->
	    		<div>
	    			<div>
	    				<p>Title</p>
	    			</div>
	    			<div>
	    				<img src="../assets/images/eye-icon.png" alt="eye">
	    				<p>View</p>
	    			</div>
	    		</div>
	    	</div>
	    </section>
	</div>
</body>
</html>
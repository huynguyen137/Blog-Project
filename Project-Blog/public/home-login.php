<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/main-style.css">
        <link href='https://fonts.googleapis.com/css?family=Quattrocento Sans' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'>
    </head>
    <body>
        <div>
            <script>
                function closesticky() {
                    var sticky = document.getElementById('sticky');
                    sticky.style.display = 'none';
                }
            </script>
            <div class="sticky" id="sticky">
                <?php
                    if(isset($_SESSION["power"])) {
                        ?>
                        <button class='btn-exit' onClick='closesticky()'>&#x2715;</button>
                        <h4>
                            <?php if(isset($_SESSION["username"]))
                            echo"Xin Chào: ".$_SESSION["username"];
                            ?>
                        </h4>
                        <a href="../private/logout.php"><button class="button1">Logout</button></a>

                    <?php } else {
                        ?>
                        <button class='btn-exit' onClick='closesticky()'>&#x2715;</button>
                        <h4>Register an account to get more interesting posts.</h4>
                        <a href="log-in.php"><button class="button1">Login</button></a>&emsp;&emsp;
                        <a href="sign-up.php"><button class="button2">Register</button></a>
                    <?php
                    }
                ?>
            </div>
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
                                </div>                                <div class="dropdown hovering">
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
                    <div class="introduction">
                        <div class="slider">
                            <div class="left-arrow">
                                <button><img src="../assets/images/left-arrow.png" alt="Mũi tên sang trái"></button>
                            </div>
                            <div class="intro-area">
                                <div class="intro-title">
                                    <p class="black-txt bold upper px40 quattro-sans-font">About this Blog</p>
                                    <p class="black-txt px20 quattro-sans-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <div class="right-arrow">
                                <button><img src="../assets/images/right-arrow.png" alt="Mũi tên sang phải"></button>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="wrap-content">
                    <div class="content">
                        <section class="main-content">
                            <?php 
                                include_once '../private/db-connect.php';

                                $READ1 = "SELECT * FROM post ORDER BY post_id DESC";
                                $print_post = $con->query($READ1);

                                if ($print_post->num_rows > 0) {
                                    while ($post_area = $print_post->fetch_assoc()) { ?>
                            <div class="pre-post-link">
                                <div class="pre-post-thumb">
                                    <a href="blog-post.php"><img src="<?php echo $post_area['image_url']; ?>" alt="Bài viết"></a>
                                </div>
                                <div class="pre-post-txt">
                                    <div class="pre-post-title">
                                        <a href="blog-post.php?id=<?php echo $post_area['post_id']; ?>" class="black-txt px30 bolder decor-none quattro-font"><?php echo $post_area['title']; ?></a>
                                    </div>
                                    <div class="pre-post-intro">
                                        <a href="" class="red-txt px12 bold decor-none quattro-sans-font">
                                            <?php 
                                                $key_id1 = $post_area['user_id']; 
                                                $READ2 = "SELECT * FROM user WHERE user_id = '$key_id1'";
                                                $print_name = $con->query($READ2);
                                                if ($print_name->num_rows > 0) {
                                                    while ($post_name = $print_name->fetch_assoc()) {
                                                        echo $post_name['fullname'];
                                                    }
                                                }
                                            ?>
                                                
                                        </a>
                                        <a href="" class="red-txt px12 bold decor-none quattro-sans-font">
                                            <?php 
                                                $key_id2 = $post_area['cate_id']; 
                                                $READ3 = "SELECT * FROM cate WHERE cate_id = '$key_id2'";
                                                $print_cate = $con->query($READ3);
                                                if ($print_cate->num_rows > 0) {
                                                    while ($post_cate = $print_cate->fetch_assoc()) {
                                                        echo $post_cate['cate_name'];
                                                    }
                                                }
                                            ?>
                                        </a>
                                        <p class="red-txt px12 bold quattro-sans-font"> X hours ago</p>
                                    </div>
                                </div>
                            </div>
                            <?php } } ?>
                        </section>
                        <aside class="side-content">
                            <!-- Show các bài viết nổi bật -->
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
                                        <p class="black-txt quattro-sans-font px12">123</p>
                                        <!-- Hiện số lượt xem bài viết, sửa lại bằng JS -->
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
                                        <p class="black-txt quattro-sans-font px12">123</p>
                                        <!-- Hiện số lượt xem bài viết, sửa lại bằng JS -->
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
                                        <p class="black-txt quattro-sans-font px12">123</p>
                                        <!-- Hiện số lượt xem bài viết, sửa lại bằng JS -->
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <footer>
                    <div class="wrap-subs">
                        <center class="subscribe">
                            <div class="subs-header">
                                <p class="quattro-font px53 bold white-txt">Newsletter</p>
                                <p class="quattro-sans-font px17 white-txt">Enter your email address to receive all news, updates on new arrivals, special offers and other information.</p>
                            </div>
                            <div class="subs-form">
                                <form method="post" action="">
                                    <input type="text" name="fname" class="input" placeholder="YOUR NAME">
                                    <input type="email" name="mail" class="input" placeholder="EMAIL">
                                    <button type="submit" name="submit" class="quattro-sans-font px17">Subscribe</button>
                                </form>
                            </div>
                        </center>
                    </div>
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
        </div>
    </body>
</html>

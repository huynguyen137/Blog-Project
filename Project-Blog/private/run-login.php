<?php
$username=$_POST['username'];
$password=$_POST['password'];

$conn = new mysqli('localhost', 'root', '', 'myDB');
$sql = "SELECT * FROM User WHERE username = '$username'";
$result = $conn->query($sql)->fetch_assoc();

if($result['password'] == $password)
{
	session_start();
	$_SESSION["username"] = $username;
	$_SESSION["power"] = $result['power'];
	header("location:../public/home-login.php");
}
else
{
	echo "<p style='color:red'>Sai tên đăng nhập hoặc mật khẩu!</p>";
}
$conn->close();
?>
<a href="../public/home.php"><button>Trang chủ</button></a>
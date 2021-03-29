<?php
require_once('./db-connect.php');

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$power = 'client';

$sql = "INSERT INTO User (fullname, username, password, power) values ('".$fullname."' ,'".$username."' ,'".$password."' ,'".$power."')";
$stmt = $con->prepare($sql);
$stmt->execute();
header('location:../public/home.php');
?>
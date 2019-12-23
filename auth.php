<?php


$login = trim($_POST["login"]);
$password = $_POST["password"];




$mysql = new mysqli('localhost','root','','reg_form');

if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}


$sql="SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'";

$result=$mysql->query($sql);

$user =$result->fetch_assoc();

if(count($user)==0){
	echo "No user";
	exit();
}

setcookie('user',$user['name'],time()+3600, "/");



$mysql->close();

header('Location: task3.php');
?>

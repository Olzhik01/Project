<?php

$login = trim($_POST["login"]);
$password = $_POST["password"];




$mysql = new mysqli('localhost','root','','findbook');

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

if($login==="admin" && $password=="admin"){
	header("Location: admin.php");
}

$mysql->close();




?>

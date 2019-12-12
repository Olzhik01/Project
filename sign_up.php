<?php

$name = trim($_POST["name"]);
$surname = trim($_POST["surname"]);
$login = trim($_POST["login"]);
$password = $_POST["password"];


$mysql = new mysqli('localhost','root','','findbook');

if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}

$sql="INSERT INTO `users`(`id`, `name`, `surname`, `login`, `password`) VALUES (NULL,'$name','$surname','$login','$password')";


$mysql->query($sql);
/*if ($mysql->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysql->error;
}*/




$mysql->close();

header('Location: login.php');





?>

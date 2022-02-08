<?php
//process-register.php

// receive variaibles
$username = $_POST["username"];
$password = $_POST["password"];

// insert data into the database table

// connect
include("includes/db-connect.php"); 

// prepare
$stmt = $pdo->prepare("INSERT INTO `user` (`userId`,`username`,`password`,`admin`) VALUES (NULL,'$username','$password','0');");

// execute
if($stmt ->execute() == true) {
   header("location:login.php");
}else {
    echo("Oops! Something went wrong");
}
?>


<?php
//process-register.php

// receive variaibles
$username = $_POST["username"];
$password = $_POST["password"];
$emailAddress = $_POST["emailAddress"];

// insert data into the database table

// connect
include("includes/db-connect.php"); 

// prepare
$stmt = $pdo->prepare("INSERT INTO `user` (`userId`,`username`,`password`,`emailAddress`) VALUES (NULL,'$username','$password','$emailAddress');");

// execute
if($stmt ->execute() == true) {
    echo("Success!");
//    header("location:login.php");
}else {
    echo("Oops! Something went wrong");
}
?>


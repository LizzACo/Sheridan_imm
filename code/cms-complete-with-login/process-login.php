<?php
session_start();    
//process-login.php

$username = $_POST["username"];
$password = $_POST["password"];

include("includes/db-connect.php");

//prepare
$stmt = $pdo->prepare("SELECT * FROM `person` 
	WHERE `username` = '$username' 
	AND `password` = '$password'");
//execute
$stmt->execute();

if($row = $stmt->fetch()){
	
	header("Location:select-persons.php");
	
	$_SESSION["personId"] = $row["personId"];
	$_SESSION["username"] = $row["username"];
	
}else{
	?><p>NOT Correct username and password</p>
		<a href="login.php">Back to login</a>
	<?php
}


?>
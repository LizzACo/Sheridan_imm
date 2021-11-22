<?php
//process-contact-info.php

// receive variaibles
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$industry = $_POST["industry"];
$technical = $_POST["technical"];
$career = $_POST["career"];
$role = $_POST["role"];

// insert data into the database table

// connect
include("includes/db-connect.php"); 

// prepare
if (!isset($_POST["industry"])){
    $industry = 0;
} else {
    $industry = $_POST["industry"];
}

if(!isset($_POST["technical"])){
    $technical = 0;
} else {
    $technical = $_POST["technical"];
}

if(!isset($_POST["career"])){
    $career = 0;
} else {
    $career = $_POST["career"];
}

$stmt = $pdo->prepare("INSERT INTO `contact` (`firstName`, `lastName`,`email`,`industry`,`technical`,`career`,`role`) VALUES ('$firstName', '$lastName','$email', $industry, $technical, $career,'$role');");

// execute
if($stmt ->execute() == true) {
   echo("Thank you");
}else {
    echo("Oops! Something went wrong");
}
?>

<a href = "main.php"> Back to main page </a>

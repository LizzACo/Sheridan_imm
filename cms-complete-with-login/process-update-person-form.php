<?php
//process-update-person-form.php
include("includes/session-check.php");
$personId = $_POST["personId"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$dob = $_POST["dob"];

//connect
include("includes/db-connect.php"); 

//prepare
$stmt = $pdo->prepare("UPDATE `person` 
	SET `firstName` = '$firstName', 
	`lastName` = '$lastName', 
	`dob` = '$dob' 
	WHERE `person`.`personId` = $personId;");

if($stmt->execute() == true){
	header("Location: select-persons.php");
}

?>
<a href="select-persons.php">Back to person records</a>
<?php
//process-search.php
//receive search Term, find in database table, display results

$searchTerm = $_GET["searchTerm"];
include("includes/db-connect.php");
$stmt = $pdo->prepare("SELECT * FROM `person`
	WHERE `firstName` LIKE '%$searchTerm%';");
//execute
$stmt->execute(); 

//display
while($row = $stmt->fetch()) { 
	?><p><?php    
	echo($row["personId"]);
	echo("<br/>");
	echo($row["firstName"]);
	echo("<br/>");
	echo($row["lastName"]);
	echo("<br/>");
	echo($row["dob"]);
	echo("<br/>");
  
}

?>
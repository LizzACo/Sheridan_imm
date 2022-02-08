<?php
//delete-person.php
include("includes/session-check.php");
if(isset($_POST["personId"]) == false){
	?> <p>We do not have the correct variables for this file to run</p><?php
}else{

//receive variables
$personId = $_POST["personId"];

//delete a specific record
//connect
include("includes/db-connect.php"); 

//prepare
$stmt = $pdo->prepare("DELETE FROM `person` 
	WHERE `personId` = $personId");

if($stmt->execute() == true){
	header("Location: select-persons.php");
}

?>
<a href="select-persons.php">Back to Person records</a>

<?php
}
?>
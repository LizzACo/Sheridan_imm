<?php
//process-insert-person-form.php
include("includes/session-check.php");
//receive variables
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$dob = $_POST["dob"];

//insert data into the database table

//connect
include("includes/db-connect.php"); 

//prepare
$stmt = $pdo->prepare("INSERT INTO `person` (`personId`, `firstName`, `lastName`, `dob`) VALUES (NULL, '$firstName', '$lastName', '$dob');");

//execute
if($stmt->execute() == true){
	header("Location: select-persons.php");
}else{
	echo("Oops. Something went wrong");
	?>
	<a href="select-persons.php">Back to records.</a>
	<?php
}
?>

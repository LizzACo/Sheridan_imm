<?php
include("includes/session-check.php");

//select-persons.php
include("includes/header.php");
?>

<a href="insert-person-form.php">Add a new Person.</a>

<?php
//retrieve and display person records
//connect
include("includes/db-connect.php"); 

//prepare
$stmt = $pdo->prepare("SELECT * FROM `person`");

//execute
$stmt->execute();

//display results
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
	?>
	<a href="update-person-form.php?personId=<?php echo($row["personId"]); ?>">Update</a>
	<a href="delete-person-confirmation.php?personId=<?php echo($row["personId"]); ?>">Delete</a>

	</p><?php    
}


include("includes/footer.php");

?>
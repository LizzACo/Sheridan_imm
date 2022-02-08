<?php
//delete-person-confirmation.php
include("includes/session-check.php");
if(isset($_GET["personId"]) == true){
	$personId = $_GET["personId"];
	include("includes/header.php");
?>

<h1>Are you sure you want to delete this record?</h1>

<?php
//Preview of record
//(personId, first name , last name, dob of a specific record)
include("includes/db-connect.php"); 
//prepare
$stmt = $pdo->prepare("SELECT * FROM `person` 
	WHERE `personId` = $personId");
//execute
$stmt->execute();

//display the record
$row = $stmt->fetch();
echo($row["personId"]);
echo($row["firstName"]);
echo($row["lastName"]);
echo($row["dob"]);

?>

<form method="POST" action="delete-person.php">
	<input type="hidden" name="personId" 
	value="<?php echo($row["personId"]);?>">
	<input type="submit">
</form>

<a href="select-persons.php">Go Back</a>
<?php
}else{
	?><p>Sorry, we do not know which record to confirm</p><?php
}

include("includes/footer.php");
?>
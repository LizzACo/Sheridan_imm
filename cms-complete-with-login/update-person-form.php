<?php
//update-person-form.php
include("includes/session-check.php");
$personId = $_GET["personId"];

include("includes/header.php");
?>

<h1>Update record #<?= $personId ?></h1>
<?php
//Preview of record
//(personId, first name , last name, dob of a specific record)
$dsn = "mysql:host=localhost;dbname=singhwa_imm2022;charset=utf8mb4";
$dbusername = "singhwa_imm2022user";
$dbpassword = "7wu8[^uG10b)";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 
//prepare
$stmt = $pdo->prepare("SELECT * FROM `person` 
	WHERE `personId` = $personId");
//execute
$stmt->execute();

//display the record
$row = $stmt->fetch();
?>

<form method="POST" action="process-update-person-form.php">
	<input type="hidden" name="personId" 
	value="<?= $row["personId"] ?>">
	<input type="text" name="firstName" 
	value="<?= $row["firstName"] ?>">
	<input type="text" name="lastName" 
	value="<?= $row["lastName"] ?>">
	<input type="text" name="dob" 
	value="<?= $row["dob"]?>">
	<input type="submit">
</form>

<?php
include("includes/footer.php");
?>
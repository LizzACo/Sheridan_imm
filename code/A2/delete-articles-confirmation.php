<?php
// delete-articles-confirmation.php

include("includes/header.php");

if(isset($_GET["articleId"]) == false){
	?><p>Sorry, we do not know which record to confirm</p><?php
	}else{
	$articleId = $_GET["articleId"];
	?>
	
	<h1>Are you sure you want to delete this articles?</h1>
	
	<?php
	// preview of record
	
	// connect
	include("includes/db-connect.php"); 
	
	// prepare
	$stmt = $pdo->prepare("SELECT * FROM `article` WHERE `articleId` = $articleId");
	
	// execute
	$stmt ->execute();
	
	//display the record
	$row = $stmt ->fetch();
	?><p><?php 
	echo($row["articleId"]);
	?><br><?php 
	echo($row["title"]);
	?><br><?php 
	echo($row["author"]);
	?><br><?php 
	echo($row["date"]);
	?><br><?php 
	?>
	
	<form method="POST" action="delete-article.php">
		<input type="hidden" name="articleId" 
		value="<?php echo($row["articleId"]);?>">
		<input type="submit">
	</form>
	
	<a href="administrator.php">Go Back</a>

	<?php
	}
	?>

<?php
include("includes/footer.php");
?>


	
	


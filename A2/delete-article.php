<?php 
//delete-article.php
//receive variables
// this page can be edited by the aministrator

include("includes/header.php");

if(isset($_POST["articleId"]) == false){
	?><p>Sorry, we do not have the article to delete from!</p><?php
} else {
	$articleId = $_POST["articleId"];

	//delete a specific record
	
	include("includes/db-connect.php"); 
	
	//prepare
	$stmt = $pdo->prepare("DELETE FROM `article` 
		WHERE `article`.`articleId` = $articleId");
	
	if($stmt->execute() == true){
		header("location:administrator.php");//make the process faster
	}else{
        echo("Oops, delete is unsuccessful! Please try again");
    }
	?>

    <a href="administrator.php">Go Back</a>

<?php
}
?>

<?php
include("includes/footer.php");
?>




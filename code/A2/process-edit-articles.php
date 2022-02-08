<?php
//process-edit-articles.php

if(isset($_POST["articleId"]) == false){
	?><p>Sorry, we do not have the article to edit!</p><?php
} else {
// receive variaibles
$articleId = $_POST["articleId"];
$img = $_POST["img"];
$title = $_POST["title"];
$author = $_POST["author"];
$preview = $_POST["preview"];
$link = $_POST["link"];
$feature = $_POST["feature"];

// insert data into the database table

// connect
include("includes/db-connect.php"); 

// prepare
$stmt = $pdo->prepare("UPDATE `article` SET `img` = '$img' ,`title` = '$title', `author` = '$author',`preview` = '$preview',`link` = '$link',`feature` = '$feature' WHERE `article`.`articleId` = $articleId;");

// execute
    if($stmt ->execute() == true) {
        header("location:administrator.php");
    }else {
        echo("Oops! Something went wrong");
    }
}
?>


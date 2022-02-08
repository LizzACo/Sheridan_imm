<?php
//process-like.php
include("includes/session.php");
if(!isset($_GET["articleId"])){
	?><p>Sorry, we do not have the article to like!</p><?php
} else {
// receive variaibles
    $articleId = $_GET["articleId"];
    $userId = $_SESSION["userId"];
    
    // insert data into the database table

    // connect
    include("includes/db-connect.php"); 

    // prepare
    $stmt = $pdo->prepare("UPDATE `likes` SET `liked` = 0  WHERE `articleId` =  $articleId AND `userId` = $userId");

    // execute
        if($stmt ->execute() == true) {
            header("location:main.php");
        }else {
            echo("Oops! Something went wrong");
        }
    }
?>
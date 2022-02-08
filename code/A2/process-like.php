<?php
//process-like.php
include("includes/session.php");
$_SESSION['like'] ++;
if(!isset($_GET["articleId"])){
    ?><p>Sorry, we do not have the article to edit!</p><?php
} else {
    // receive variaibles
    $articleId = $_GET["articleId"];
    $userId = $_SESSION["userId"];
    $total = $_SESSION['like'];

    if($total >= 1){
        include("includes/db-connect.php"); 
        $stmt = $pdo->prepare("UPDATE `article` SET `likes` = $total WHERE `articleId` = $articleId ");
        $stmt ->execute();
    }else{
        $_SESSION['like'] --;
        include("includes/db-connect.php"); 
        $stmt = $pdo->prepare("UPDATE `article` SET `likes` = $total WHERE `articleId` = $articleId ");
        $stmt ->execute();
    }

    // insert data into the database table

    // connect
    include("includes/db-connect.php"); 

    // prepare
    $stmt = $pdo->prepare("INSERT INTO `likes` (`liked`, `userId`, `articleId`) VALUES (1 , $userId, $articleId);");

    // execute
        if($stmt ->execute() == true) {
            header("location:main.php");
        }else {
            echo("Oops! Something went wrong");
        }
}	   
?>
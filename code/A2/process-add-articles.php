<?php
//process-add-articles.php
include("includes/session.php");

// receive variaibles
$img = $_POST["img"];
$title = $_POST["title"];
$author = $_POST["author"];
$preview = $_POST["preview"];
$link = $_POST["link"];

// insert data into the database table

// connect
include("includes/db-connect.php"); 

// prepare
$stmt = $pdo->prepare("INSERT INTO `article` (`articleId`, `img`, `title`, `author`, `preview`,`link`, `feature`, `likes`) VALUES (NULL, '$img', '$title', '$author', '$preview', '$link', '0', '0');");

// execute
if($stmt ->execute() == true) {
   header("location:administrator.php");
}else {
    echo("Oops! Something went wrong");
}
?>

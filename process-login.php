<?php
// process-login.php
session_start();   
  
  $username = $_POST["username"];
  $password = $_POST["password"];
  $emailAddress = $_POST["emailAddress"];
  
  // connect
  include("includes/db-connect.php"); 
  // prepare
  $stmt = $pdo->prepare("SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password' OR `emailAddress` = '$emailAddress'");

  // execute
  $stmt ->execute(); 

  if($row = $stmt ->fetch()){
    // header("Location:main.php");
    echo("success!");
    $_SESSION["userId"] = $row["userId"];
    } else {
      ?><p>Incorrect username and password 
          <a href = "login.php">Back to login</a>
      <?php
    } 
?>

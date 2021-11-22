<?php
// process-login.php
session_start();   
  
  $username = $_POST["username"];
  $password = $_POST["password"];
  $admin = $_POST["admin"];

// if the logged in user is not an administrator
if($admin != 1){
  
  // connect
  include("includes/db-connect.php"); 
  // prepare
  $stmt = $pdo->prepare("SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'");

  // execute
  $stmt ->execute(); 

  if($row = $stmt ->fetch()){
    header("Location:main.php");
     $_SESSION["userId"] = $row["userId"];
    } else {
      ?><p>Incorrect username and password 
          <a href = "login.php">Back to login</a>
      <?php
    } 
}else{

  // connect
  include("includes/db-connect.php");   
  // prepare
  $stmt = $pdo->prepare("SELECT * FROM `user` WHERE `admin` = '$admin'");

  // execute
  $stmt ->execute(); 

  if($row = $stmt ->fetch()){
    header("Location:administrator.php");
     $_SESSION["userId"] = $row["userId"];
    } else {
      ?><p>Incorrect username and password 
          <a href = "login.php">Back to login</a>
      <?php
    }
} 
?>

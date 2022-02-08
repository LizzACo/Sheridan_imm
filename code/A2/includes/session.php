<?php
session_start();
if(!isset($_SESSION["userId"])){
    ?><p>Suspicious login!
    <a href = "login.php">Back to login page</a>
    <?php
    exit();
} 
?>
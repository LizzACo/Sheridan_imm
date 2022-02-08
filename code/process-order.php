<?php
//process-order.php
// include("includes/session.php");

// receive variaibles
$milkId = $_POST["milkId"];
$teaId = $_POST["teaId"];
$sugarId = $_POST["sugarId"];
$iceId = $_POST["iceId"];
$topping1 = $_POST["topping1"];
$topping2 = $_POST["topping2"];
$topping3 = $_POST["topping3"];

// insert data into the database table

// connect
include("includes/db-connect.php"); 

// prepare
$stmt = $pdo->prepare("INSERT INTO `shoppingCart` (`cartId`, `milkId`, `teaId`, `sugarId`, `iceId`,`topping1`, `topping2`, `topping3`) VALUES (NULL, $milkId, $teaId, $sugarId, $iceId, '$topping1', '$topping2', '$topping3');");

// execute
if($stmt ->execute() == true) {
    echo("success!");
//    header("location:administrator.php");
}else {
    echo("Oops! Something went wrong");
}
?>

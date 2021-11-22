<?php
// view-order.php
// retrieve and display article record
// this page can be accessed by the aministrator

// include("includes/session.php");
include("includes/header.php");
?>

<?php
// connect
include("includes/db-connect.php"); 

// prepare
$stmt = $pdo->prepare("SELECT * FROM shoppingCart LEFT JOIN(milk, tea, sugar, ice) ON ( milk.milkId = shoppingCart.milkId AND tea.teaId = shoppingCart.teaId AND sugar.sugarId = shoppingCart.sugarId AND ice.iceId = shoppingCart.iceId)");

// execute
$stmt ->execute(); 

// display results
while($row = $stmt->fetch()) { 
    ?><p><label for="milkName">Milk: </label><?php  
    echo($row["milkName"]);
    ?><br><label for="teaName">Tea: </label><?php 
	echo($row["teaName"]);
    ?><br><label for="sugarMeasure">Sugar: </label><?php   
    echo($row["sugarMeasure"]); 
    ?><br><label for="iceMeasure">Ice/Hot: </label><?php 
    echo($row["iceMeasure"]); 
    ?><br><label for="topping1"> Topping One: </label><?php
    echo($row["topping1"]); 
    ?><br><label for="topping2"> Topping Two: </label><?php
    echo($row["topping2"]); 
    ?><br><label for="topping3"> Topping Three: </label><?php
    echo($row["topping3"]); 
    ?><br>
    <!-- <a href = "edit-article.php?articleId=<?php echo($row["articleId"]);?>">Edit</a>
    <a href = "delete-articles-confirmation.php?articleId=<?php echo($row["articleId"]);?>">Delete</a> -->
    <p><?php
}
include("includes/footer.php");
?>


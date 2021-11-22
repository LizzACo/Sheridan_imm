<?php
// connect
include("includes/db-connect.php"); 

// prepare
$stmt = $pdo->prepare("SELECT * FROM `orderHistory`INNER JOIN (user, shoppingCart) ON (user.userId = orderHistory.userId AND shoppingCart.cartId = orderHistory.cartId)INNER JOIN(milk, tea,sugar, ice) ON (milk.milkId = shoppingCart.milkId AND tea.teaId = shoppingCart.teaId AND sugar.sugarId = shoppingCart.sugarId AND ice.iceId = shoppingCart.iceId)");

// execute
$stmt ->execute(); 

// display results
while($row = $stmt->fetch()) { 
    ?><p><label for="username">Username: </label><?php  
    echo($row["username"]);
    ?><br><label for="milkName">Milk: </label><?php  
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
    ?><br><label for="totalPrice"> Total Price: $ </label><?php   
    echo($row["totalPrice"]); 
    ?><br><?php
}
// include("includes/footer.php");
?>
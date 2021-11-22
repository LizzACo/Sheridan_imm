
<?php
// contact-form-submissions.php
// this page can only be viewed by the aministrator
// display public users' contact form record
include("includes/header.php");
include("includes/session.php");
?>

<?php
// connect
include("includes/db-connect.php"); 
 
// prepare
$stmt = $pdo->prepare("SELECT * FROM `contact`");

// execute
$stmt ->execute(); 

// display results
while($row = $stmt->fetch()) { 
    ?><p><?php 
    echo($row["contactId"]);
    ?><br><?php  
	echo($row["firstName"] . $row["lastName"]);  
    ?><br><?php
    echo($row["email"]); 
    ?><br><?php
    echo($row["industry"]);
    ?><br><?php
    echo($row["technical"]);
    ?><br><?php
    echo($row["career"]);
    ?><br><?php
    echo($row["role"]); 
}
include("includes/footer.php");
?>




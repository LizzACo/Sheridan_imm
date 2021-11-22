<?php
// administrator.php
// retrieve and display article record
// this page can be accessed by the aministrator

include("includes/session.php");
include("includes/header.php");
?>

<nav>
    <ul>
        <a href = "main.php">Home</a>
        <a href = "about-edit.php">Edit About Page</a>
        <a href = "contact-form-submissions.php">Contact Form</a>
        <a href = "404-No-Found.php">Profile</a>
        <a href = "logout.php">Logout</a><br><br>
        <a href = "add-article.php">Add a new article</a>
    </ul>
</nav>

<?php
// connect
include("includes/db-connect.php"); 

// prepare
$stmt = $pdo->prepare("SELECT * FROM `article`");

// execute
$stmt ->execute(); 

// display results
while($row = $stmt->fetch()) { 
    ?><p><img src ="<?php echo $row['img']?>" style = "width:20%;"><br><br>
    <?php  
    echo($row["articleId"]);
    ?><br><?php 
	echo($row["title"]);
    ?><br><?php   
    echo($row["author"]); 
    ?><br><?php 
    echo($row["preview"]); 
    ?><br><?php
    echo($row["link"]); 
    ?><br>
    <a href = "edit-article.php?articleId=<?php echo($row["articleId"]);?>">Edit</a>
    <a href = "delete-articles-confirmation.php?articleId=<?php echo($row["articleId"]);?>">Delete</a>
    <p><?php
}
include("includes/footer.php");
?>


<?php 
// edit-article.php
// this page can be edited by the aministrator
include("includes/session.php");
include("includes/header.php");

if(isset($_GET["articleId"]) == false){
	?><p>Sorry, we do not know which record to edit</p><?php
	}else{
    $articleId = $_GET["articleId"];
    ?>

    <h1>Update record #<?= $articleId ?></h1>

    <?php
    //Preview of record

    // connect
    include("includes/db-connect.php"); 

    //prepare
    $stmt = $pdo->prepare("SELECT * FROM `article` 
        WHERE `articleId` = $articleId");
    
    //execute
    $stmt->execute();
    $row = $stmt ->fetch();
    ?>
        <form method = "POST", action ="process-edit-articles.php">
            <input type="hidden" name="articleId" value="<?= $row["articleId"]?>">
            <label for="img">Article Image:</label><br>
            <input type="text" id="img" name="img" value ="<?=$row["img"]?>"><br>
            <label for="title">Article Title:</label><br>
            <input type="text" id="title" name="title" value ="<?=$row["title"]?>"><br>
            <label for="author">Editor:</label><br>
            <input type="text" id="author" name="author" value ="<?=$row["author"]?>"><br>
            <label for="preview">Preview Text:</label><br>
            <input type="text" id="preview" name="preview" value ="<?=$row["preview"]?>"><br>
            <label for="link">Link to the full page:</label><br>
            <input type="text" id="link" name="link" value ="<?=$row["link"]?>"><br><br>
            <label for="feature">Set to feature:</label><br>
            <select name="feature" id="feature">
            <option value="0">0</option>
            <option value="1">1</option>
            </select><br><br>
            <input type="submit" value="Submit">
        </form>

        <a href="administrator.php">Go Back</a>
<?php
}
?>

<?php
include("includes/footer.php");
?>
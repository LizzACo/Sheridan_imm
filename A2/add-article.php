<?php
// add-article.php
// articleId, title, author, date
include("includes/session.php");
include("includes/header.php");
?>
    <form method = "POST", action ="process-add-articles.php">
        <fieldset>
        <label for="img">Article Image:</label><br>
        <input type="text" id="img" name="img"><br>
        <label for="title">Article Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="author">Editor:</label><br>
        <input type="text" id="author" name="author"><br>
        <label for="preview">Preview Text:</label><br>
        <input type="text" id="preview" name="preview"><br>
        <label for="link">Link to the full page:</label><br>
        <input type="text" id="link" name="link"><br><br>
        <input type="submit" value="Submit">
        </fieldset>
    </form>

<?php
include("includes/footer.php");
?>
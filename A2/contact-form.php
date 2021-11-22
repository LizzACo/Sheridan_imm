<?php
//contact-form.php
include("includes/header.php");
?>
    <form action = "process-contact-info.php" method = "POST">
        <fieldset>
        <label for="firstName">First name:</label>
        <input type = "text" name = "firstName" required>
        <label for="lastName">Last name:</label>
        <input type = "text" name = "lastName" required>
        </fieldset><br>
        <fieldset>
        <label for= "email">Email Address:</label>
        <input type = "email" name = "email" required>
        </fieldset><br>
        <fieldset>
        <input type = "checkbox" id = "industry" name = "industry" value = 1>
        <label for= "industry">Industry</label>
        <input type = "checkbox" id = "technical" name = "technical" value = 1>
        <label for= "technical">Technical</label>
        <input type = "checkbox" id = "career" name = "career" value = 1>
        <label for= "career">Career</label><br>
        </fieldset><br>
        <fieldset>
        <label for="role">Your role:</label>
        <select name="role" id="role">
            <option value="writer">Writer</option>
            <option value="contributor">Contributor</option>
            <option value="administrator">Administrator</option>
        </select>
        </fieldset><br>
        <input type = "submit">
    </form><br>

    <a href = "main.php">Back</a>
    
<?php
include("includes/footer.php");
?>
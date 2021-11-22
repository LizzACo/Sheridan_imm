<?php
//register.php
include("includes/header.php");
?>
<h1>Register</h1>
    <form action = "process-register.php" method = "POST">
        <div class = "fstyle">
            <label for="username">Username:</label>
            <input type = "text" name = "username" required>
            <label for="password">Password:</label>
            <input type = "password" name = "password" required>
        </div>
        <input type ="submit"/>
    </form><br>

    <a href = "main.php">Go Back</a>
<?php
// include("includes/footer.php");
?>
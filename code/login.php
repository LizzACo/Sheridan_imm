<?php
//login.php
include("includes/header.php");
?>
<h1>Login</h1>
<form action = "process-login.php" method = "POST">
    <div>
        <label for="username">Username:</label>
        <input type = "text" name = "username" required>
        <label for="password">Password:</label>
        <input type = "password" name = "password" required><br><br>
        <label for="emailAddress">Email Address:</label>
        <input type = "email" name = "emailAddress" required><br><br>
        <label for="admin">Administrator:</label>
        <input type = "checkbox" name = "admin" value = "1"><br><br>
    </div>
    <input type ="submit"/>
</form><br>
<!-- <a href = "main.php">Go Back</a> -->

<?php
// include("includes/footer.php");
?>
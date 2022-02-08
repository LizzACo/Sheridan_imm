<form action = "process-message.php" method = "POST">
    <div>
        <label for="message">Type your message here:</label><br>
        <textarea id = "message" name = "message" rows="4" cols="50" required></textarea><br><br>
        <label for="emailAddress">Your receiver's email:</label><br>
        <input type = "text" name = "emailAddress" required><br><br>
    </div>
    <input type ="submit"/>
</form><br>
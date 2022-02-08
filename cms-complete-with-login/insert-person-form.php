<?php
include("includes/session-check.php");
//insert-person-form.php

//personId, firstName, lastName, dob
include("includes/header.php");
?>
<form method="POST" action="process-insert-person-form.php">
	<input type="text" name="firstName">
	<input type="text" name="lastName">
	<input type="text" name="dob">
	<input type="submit">
</form>

<?php
include("includes/footer.php");
?>
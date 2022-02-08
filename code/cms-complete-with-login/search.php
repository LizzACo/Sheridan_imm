<?php
//search.php
include("includes/header.php");
?>
<h1>Search your user!</h1>
<p>Please enter the user name</p>
<form action="process-search.php" method="GET">
<input type="text" name="searchTerm">
	<input type="submit">
</form>

<?php
include("includes/footer.php");
?>

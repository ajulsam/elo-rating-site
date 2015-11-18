<?php
require 'header.php';
require 'connection.php';
?>

<form action="create_record.php" method="post">
Name of new Record: <input type="text" name="newRecord"><br>

<input type="submit" name="submit" value="Submit">
</form>

<?php
require 'footer.php';
?>
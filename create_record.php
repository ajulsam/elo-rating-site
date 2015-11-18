<?php
require 'header.php';
require 'connection.php';

$sql = "INSERT INTO ratings (id, name)
VALUES ('" . uniqid() . "', '" . $_POST['newRecord'] . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

require 'footer.php';
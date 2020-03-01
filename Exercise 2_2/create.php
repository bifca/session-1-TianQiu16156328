<?php

// Create connection
require "config.php";  // This will import our configuration and set the vairables within the PHP
//Set the SQL query


$sql = "INSERT INTO character_p5 (character_number, name) VALUES ('', '')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

<?php
// include database connection file

require "config.php";  // This will import our configuration and set the vairables within the PHP
//Set the SQL query

// Get genreid from URL to delete that genre
$characterid = $_GET['character_number'];

// Delete genre row from table based on given genreid
$sql = ("DELETE FROM character_p5 WHERE character_number=$characterid");
 if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
// After delete redirect to Home, so that latest genre list will be displayed.
header("Location:edit.php");
?>

<html>

<body>

<?php
 require "config.php";  // This will import our configuration and set the vairables within the PHP
 //Set the SQL query
    $name = $_POST['name'];

$sql = "INSERT INTO character_number (character_number, name) VALUES ('', '$name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
    header('refresh:3; url=http://localhost/GitHub/session-1/Exercise%202_2/edit.php')
?>
</body>
</html>

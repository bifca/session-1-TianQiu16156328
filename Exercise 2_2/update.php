<?php
require "config.php";  // This will import our configuration and set the vairables within the PHP
//Set the SQL query

// Check if form is submitted for update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$character_number = $_POST['character_number'];

	$name=$_POST['name'];

	// update genre data
	$sql = ("UPDATE character_p5 SET name='$name' WHERE character_number=$characterid");
	$result = $conn->query($sql);
	// Redirect to homepage to display updated genre in list
	header("Location: edit.php");
}

// Display selected genre data based on genreID
// Getting genreID from url
$characterid = $_GET['character_number'];

// Fetch genre data based on genreID
$sql = "SELECT * FROM character_p5 WHERE character_number=$characterid";
$result = $conn->query($sql);
while($row =$result->fetch_assoc())
{
	$name = $row['name'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>


	<form name="update_user" method="post" action="update.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>

			<tr>
				<td><input type="hidden" name="character_number" value= <?php echo $_GET['character_number'];?> ></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

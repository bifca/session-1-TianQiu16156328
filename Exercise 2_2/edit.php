<html>

<body>

<?php
require "config.php";  // This will import our configuration and set the vairables within the PHP
//Set the SQL query

    $sql = "SELECT character_number, name from character_p5";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
?>
<table>

   <tr>
       <td><b>Character number</b></td>
       <td><b>Name</b></td>
  </tr>
<?php
        while($row =$result->fetch_assoc()) {
    ?>
   <tr>
       <td><?= $row["character_number"];?></td>
       <td><?= $row["name"];?></td>
       <td><a href="update.php?genreID=<?=$row["character_number"];?>">Update</a></td>
       <td><a href="delete.php?genreID=<?=$row["character_number"];?>">Delete</a></td>
   </tr>

   <?php
        }
   ?>
</table>
    <?php
    } else {
   ?>

<p>0 results</p>

   <?php
    }

    $conn->close();
?>

</body>
</html>

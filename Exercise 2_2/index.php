<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">


      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>-->

  <!-- Latest compiled Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- latest jQuery library -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<!-- jQuery library -->
  <script src="js/jquery-2.1.4.min.js"></script>

  <title>Persona 5</title>
</head>

   <?php //Perform database query
    require "config.php";  // This will import our configuration and set the vairables within the PHP
    //Set the SQL query
    ?>

<body>
  <?php
    $sql = "SELECT * From character_p5 ORDER BY character_number";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
      echo '<div class="container">
              <h2>Main Character</h2>
                <div class="row">';
      $count = 0;
      while ($row = $result->fetch_assoc()) {
        $count = $count + 2;
          echo '<div class="col-lg-4 col-sm-6 col-xs-12"><section>';
          echo '<img src="'.$row["image"].'" class="img-thumbnail" alt="image" />'; //display image
          echo '<h3>'.$row["name"].'</h3><br><p>'.$row["introduction"].'</p><br>';
          echo '</section></div>';
          if ($count == 12){
            echo '</div><div class="row">';
          }
        }
      }
      echo '</div>';//content container
      $conn->close();
  ?>
</body>
</html>

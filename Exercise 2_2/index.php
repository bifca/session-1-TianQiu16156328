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

<div class="none">
   <?php //Perform database query
    require "config.php";  // This will import our configuration and set the vairables within the PHP
    //Set the SQL query
    ?>
</div>

<body>
<div class="container">
  <h2>Main Character</h2>
  <div class="row">
    <div class="col-lg-4 col-sm-6 col-xs-12">
      <section>
        <?php
        $sql = "SELECT character_number,name,introduction,image From character_p5 ORDER BY character_number";
        $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          echo '<img src="'.$row["image"].'" class="img-thumbnail" alt="image" />'; //display image
          echo '<h3>'.$row["name"].'</h3><br><p>'.$row["introduction"].'</p><br>';
        }
      }
      else {
         echo "Error.";
         //if the browser cen't load the video, the sentence will be shown
      }
        ?>
      </section>
    </div>

    <div class="col-lg-4 col-sm-6 col-xs-12">
     <section>
       <img src="images/02.png" class="img-thumbnail"  alt="image">
       <h3>Ryuji Sakamoto</h3>
       <p>A 16-year-old who studied in high school with the protagonist.</p>
     </section>
   </div>

   <div class="col-lg-4 col-sm-6 col-xs-12">
     <section>
       <img src="images/03.png" class="img-thumbnail"  alt="image">
       <h3>Morgana</h3>
       <p>In a different world, he accidentally helps the protagonist.</p>
     </section>
   </div>

   <div class="col-lg-4 col-sm-6 col-xs-12">
     <section>
       <img src="images/04.png" class="img-thumbnail"  alt="image">
       <h3>Ann Takamaki</h3>
       <p>Innocent High school students.</p>
     </section>
   </div>

   <div class="col-lg-4 col-sm-6 col-xs-12">
     <section>
       <img src="images/05.png" class="img-thumbnail" alt="image">
       <h3>Yusuke Kitagawa</h3>
       <p>Good at art.</p>
     </section>
   </div>

   <div class="col-lg-4 col-sm-6 col-xs-12">
     <section>
       <img src="images/06.png" class="img-thumbnail" alt="image">
       <h3>Makoto Niijima</h3>
       <p>Student president.</p>
     </section>
   </div>
   </div><!-- row -->
 </div><!-- content container -->

</body>
</html>

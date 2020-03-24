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

  <title>Song of Ice and Fire</title>
</head>


<body>
  <?php

  $curl = file_get_contents("https://www.anapioficeandfire.com/api/books");

  $book = json_decode($curl);
   ?>

  <div class='container'>
  	<?php 
    // $book has returned more than 1 result, under the old system we would only display 1 book, under this system we will display multiple books using a foreach loop. 
    foreach ($book AS $b){
    ?>
    <div class='row'>
  		<div class='col-12 col-md-3'>
  			<?php
  				echo '<h3>'.$b->name.'</h3>';
  				echo '<p><strong>isbn:</strong>'.$b->isbn.'<strong></br>authors:</strong>'.$b->authors[0].'<strong></br>publisher:</strong>'.$b->publisher.'</p>';
  			?>
  		</div>
  	</div>
  <?php } ?>
  </div>

</body>

</html>

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

  $curl = file_get_contents("https://www.anapioficeandfire.com/api/books/1");

  $book = json_decode($curl);
   ?>

  <div class='container'>
  	<div class='row'>
  		<div class='col-12 col-md-3'>
  			<?php
  				echo '<h3>'.$book->name.'</h3>';
  				echo '<p><strong>isbn:</strong>'.$book->isbn.'<strong></br>authors:</strong>'.$book->authors[0].'<strong></br>publisher:</strong>'.$book->publisher.'</p>';
  			?>
  		</div>
  	</div>
  </div>

</body>

</html>

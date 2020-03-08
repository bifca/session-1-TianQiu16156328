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

  <title>Weather</title>
</head>

<!-- b6e43afdec643e305ad806e02ea400e8 -->
<body>
  <div class="container">
    <div class="row">
      <dl>
  <?php
  $response = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Guilin,cn&appid=b6e43afdec643e305ad806e02ea400e8');
  $response = json_decode($response);
  //examples of extracting value and echoing it out…
  echo '<dt>'.$response->name.'</dt>';

  //where a property is followed by a square bracket it is an array so we need to add an index as there could be more than 1 instances.
  echo '<dt>Today: </dt><dd>'.$response->weather[0]->main.'</dd>';
  ?>

  <?php
  $response = file_get_contents('https://samples.openweathermap.org/data/2.5/forecast?q=Guilin,cn&appid=b6907d289e10d714a6e88b30761fae22');
  $response = json_decode($response);
  echo '<dt>Tomorrow: </dt><dd>'.$response->list[0]->weather[0]->main.'</dd>';
  ?>
      </dl>
    </div>
  </div>

</body>
</html>

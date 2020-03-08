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
    <h2>Weather Forecast</h2>
    <p>Please select the city you want to view the weather in the drop-down menu.</p>
    <div class="dropdown">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        New York
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="Guilin.php">Guilin</a>
        <a class="dropdown-item" href="Wuhan.php">Wuhan</a>
        <a class="dropdown-item" href="Beijing.php">Beijing</a>
        <a class="dropdown-item" href="Tokyo.php">Tokyo</a>
        <a class="dropdown-item" href="London.php">London</a>
        <a class="dropdown-item" href="Birmingham.php">Birmingham</a>
        <a class="dropdown-item" href="New York.php">New York</a>
        <a class="dropdown-item" href="Los Angeles.php">Los Angeles</a>
        <a class="dropdown-item" href="Sydney.php">Sydney</a>
      </div>
    </div>
    <?php
    $response = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=New+York,US&appid=b6e43afdec643e305ad806e02ea400e8');
    $response = json_decode($response);
    //examples of extracting value and echoing it out…

    //where a property is followed by a square bracket it is an array so we need to add an index as there could be more than 1 instances.
    echo $response->weather[0]->main;
    echo '<br/><br/>';
    ?>
  </div>

</body>
</html>

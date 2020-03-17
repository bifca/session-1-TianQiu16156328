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

  <title>Kon Satoshi</title>

</head>

<?php
//database configuration details
$dbname = "kon";//database that connecting to
$username = "root";// the username of the database
$password="";// the database password
$servername="localhost";//database that connecting to

$conn = mysqli_connect ($servername, $username, $password, $dbname);//connect to the database
//It has to be in the following -URL/address, servername, username, password, database name.
//If it is not in this order, it will not work.
  if (mysqli_connect_error()) {
    echo "Connection Failed:".mysqli_connect_error();
  }

  $sql = "SELECT link From kon_film WHERE id = '1' ";
  $result = mysqli_query($conn, $sql);
?>

<body background="image/pb.jpg">

  <h2>Welcome to Kon's Fan Club!</h2>

  <br /><br /><br /><br />


<?php

$filmname = 'Perfect Blue';

$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$query = array(
	"apikey" => 'df1323af',
	"t" => $filmname,
);

curl_setopt($curl, CURLOPT_URL, "http://www.omdbapi.com/"."?".http_build_query($query));


$film = json_decode(curl_exec($curl));
?>

<div class='container' style="background-color: GhostWhite;">
	<div class='row'>
		<div class='col-12'>
			<?php
				echo '<br /><p><img src="'.$film->Poster.'"></p>';
				echo '<h3>'.$film->Title.'</h3>';
				echo '<p><strong>Released:</strong>'.$film->Released.'<strong>   Rated:</strong>'.$film->Rated.'<strong>   Director:</strong>'.$film->Director.'</p>';
				echo '<p>'.$film->Plot.'</p>';
        echo '<p><strong>Language:</strong>'.$film->Language.'<strong>   Country:</strong>'.$film->Country.'<strong>   Awards:</strong>'.$film->Awards.'</p>';
        echo '<p><strong>imdbRating:</strong>'.$film->imdbRating.'<strong>   imdbVotes:</strong>'.$film->imdbVotes.'<strong>';

			?>
		</div>
	</div>
</div>

<div class="container" style="background-color: GhostWhite;">
  <div class="row">
<?php
  if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
    ?>
      <div class="col-12">
      <p><strong>
        Trailer
      </strong></p>
      <video controls>
        <source src="<?php echo $row['link']; ?>" type="video/mp4">
      </video><br /><br /><br />
    </div>
      <?php
    };
  };
?>
  </div>
</div>

</body>
</html>

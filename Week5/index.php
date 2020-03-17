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

  $sql = "SELECT * From kon_film ORDER BY id";
  $result = mysqli_query($conn, $sql);
?>

<body background="image/index.jpg">

  <h2>Welcome to Kon's Fan Club!</h2>

  <br /><br /><br /><br />


  <div class="container" style="background-color: GhostWhite;">
    <div class="row">
      <div class="col-12">
        <h3>Kon Satoshi</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6">
        <img src="image/kon.jpg" width="150" height="200" />
      </div>
      <div class="col-12 col-md-6">
        <p>
          Satoshi Kon was born in 1963. He studied at the Musashino College of
           the Arts. He began his career as a Manga artist. He then moved to
           animation and worked as a background artist on many films. Then, in
           1995, he wrote an episode of the anthology film Memorîzu (1995) (this
           Episode was "Magnetic Rose"). In 1997, he directed his first feature
           film: the excellent Pâfekuto burû (1997). In 2001, he finished work
           on his second feature film, Sennen joyû (2001) (aka Millennium Actress).
        </p>
        <a href="http://konstone.s-kon.net/">More</a>
      </div>
    </div>
  </div>



  <br /><br /><br /><br />



  <div class="container" style="background-color: GhostWhite;">
    <div class="row">
      <div class="col-12">
        <h4>Main work</h4>
      </div>
    </div>
    <div class="row">
  <?php
    if (mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_assoc($result)){
      ?>
        <div class="col-12 col-md-6">
        <p><strong>
          <?php echo $row['title']; ?>
        </strong></p>
        <video controls width="427" height="240">
          <source src="<?php echo $row['link']; ?>" type="video/mp4">
        </video>
        <p>
          <?php echo $row['info']; ?>
        </p>
        <button type="button" class="btn btn-link"><a href="<?php echo $row['link2'] ?>" target="_blank">more</a></button>
        </div>
        <?php
      };
    };
  ?>
    </div>
  </div>
</body>

</html>

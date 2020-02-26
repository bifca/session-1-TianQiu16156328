<?php
//database configuration details
$dbname = "p5";//database that connecting to
$username = "root";// the username of the database
$password="";// the database password
$servername="localhost";//database that connecting to

$conn = mysqli_connect ($servername, $username, $password, $dbname);//connect to the database
//It has to be in the following -URL/address, servername, username, password, database name.
//If it is not in this order, it will not work.

if (!$conn) {
  die("Connection Failed:".mysqli_connect_error());
}
?>

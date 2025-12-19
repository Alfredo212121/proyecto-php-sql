<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>
<?php include("cabecera.php"); ?>
<?php

$servername = "localhost";
$username = "arf";
$password = "arf";
$dbname = "bbdd_arf_mockaroo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("<div class='alert alert-danger'>Connect failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
?>
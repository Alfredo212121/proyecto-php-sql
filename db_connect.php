<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>
<?php include("cabecera.php"); ?>
<?php

$servername = "localhost";
$username = "arf";
$password = "arf";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>


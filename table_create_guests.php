<?php include("sesion.php"); ?>

<?php

include("config.php");

// sql to create table
$sql = "create table Nba_Players (
	player_id INT,
	player_name VARCHAR(50),
	team VARCHAR(8),
	position VARCHAR(14),
	height DECIMAL(4,1),
	points_per_game DECIMAL(3,1),
	assists_per_game DECIMAL(3,1)
  )";

if (mysqli_query($conn, $sql)==false) {
  echo "Error creating table: " . mysqli_error($conn);
} else {
  echo "Table Nba_Players created successfully";
}

// Close connection
mysqli_close($conn);
?> 

<?php include("footer.html"); ?>

<?php include("sesion.php"); ?>

<?php

include("config.php");

// Prepare statement
$stmt = mysqli_prepare($conn, "INSERT INTO Nba_Players (player_id, player_name, team, position, height, points_per_game, assists_per_game) VALUES (?, ?, ?, ?, ?, ?, ?)");

// Bind parameters
mysqli_stmt_bind_param($stmt, "sssssss", $player_id, $player_name, $team, $position, $height, $points_per_game, $assists_per_game);

// Set parameters and execute first record
$player_id = "1";
$player_name = "Nelli Havock";
$team = "Lakers";
$position = "Power Forward";
$height = "74.6";
$points_per_game = "8.5";
$assists_per_game = "10.2";
mysqli_stmt_execute($stmt);

// Second record
$player_id = "2";
$player_name = "Regine Golde";
$team = "Warriors";
$position = "Small Forward";
$height = "65.5";
$points_per_game = "23.1";
$assists_per_game = "17.0";
mysqli_stmt_execute($stmt);

// Third record
$player_id = "3";
$player_name = "Bernardo Didball";
$team = "Celtics";
$position = "Center";
$height = "65.5";
$points_per_game = "3.8";
$assists_per_game = "0.6";
mysqli_stmt_execute($stmt);

echo "New records created successfully";

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>


<?php include("sesion.php"); ?>

<?php

include("config.php");


// Prepare the multiple query
$sql = "INSERT INTO Nba_Players(player_id, player_name, team, position, height, points_per_game, assists_per_game)
VALUES ('4', 'Gianina Perllman', 'Lakers', 'Power Forward', '89.3', '16.2', '13.5');";
$sql .= "INSERT INTO Nba_Players(player_id, player_name, team, position, height, points_per_game, assists_per_game)
VALUES ('5', 'Tarra Spadeck', 'Lakers', 'Center', '87.6', '39.0', '0.0');";
$sql .= "INSERT INTO Nba_Players(player_id, player_name, team, position, height, points_per_game, assists_per_game)
VALUES ('6', 'Pen Windless', 'Lakers', 'Point Guard', '85.2', '7.5', '18.0');";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?> 

<?php include("footer.html"); ?>
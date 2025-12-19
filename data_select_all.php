<?php include("sesion.php"); ?>

<?php

include("config.php");

//Lanzamos la consulta
$sql = "SELECT player_id, player_name, team, position, points_per_game, assists_per_game FROM Nba_Players";
$result = mysqli_query($conn, $sql);

if ($result==false) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
elseif (mysqli_num_rows($result) > 0) {
  // Fetch all results as an associative array
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //Para probar como es la información obtenida de la base de datos.
  print "<pre>";
  print_r($rows);
  print "</pre>";

  // Use foreach to iterate
  foreach ($rows as $row) {
    echo "player_id: " . $row["player_id"] . " - Player Name: " . $row["player_name"] . " - Team " .  $row["team"] . " - Position: " . $row["position"] . " - Points per game: " . $row["points_per_game"]. " - Assists per game: " . $row["assists_per_game"] ."<br>";
  }
} else {
  echo "0 results";
}

// Close connection
mysqli_close($conn);
?>

<?php include("footer.html"); ?>

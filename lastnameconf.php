<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php
include("config.php");
include ("recoge.php");

$player_name = recoge("player_name");

if ($player_name == "") {
    header("Location: lastname.php");
    exit();
}

$sql = "SELECT player_id, player_name, team, position, points_per_game, assists_per_game FROM Nba_Players WHERE player_name='$player_name'";
$result = mysqli_query($conn, $sql);

if ($result == false) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
elseif (mysqli_num_rows($result) > 0) {


  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

  echo "<h2>Results for the playername: " . $player_name . "</h2>";

  foreach ($rows as $row) {
    echo "player_id: " . $row["player_id"] . " - Player Name: " . $row["player_name"] . " - Team " .  $row["team"] . " - Position: " . $row["position"] . " - Points per game: " . $row["points_per_game"]. " - Assists per game: " . $row["assists_per_game"] ."<br>";
  }

} 

else {
  echo "Didn´t find results for the playername: " . $player_name;

}

print "<br/>";
print "<br/>";
print "<a href='index.php'>Back to start</a>";

mysqli_close($conn);

?>

<?php include("./footer.html"); ?>
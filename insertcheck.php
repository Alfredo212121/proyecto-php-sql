<?php
include("config.php");
include("recoge.php");
include("sesion.php");

$player_name = recoge("player_name");
$team = recoge("team");
$position = recoge("position");
$points_per_game = recoge("points_per_game");
$assists_per_game = recoge("assists_per_game");

$height = "0-0";

if ($player_name == "" || $team == "" || $position == "" || $points_per_game == "" || $assists_per_game == "") {
    header("Location: insert.php");
    exit();
}

$sql_max = "SELECT MAX(player_id) AS max_id FROM Nba_Players";
$result_max = mysqli_query($conn, $sql_max);

if ($row_max = mysqli_fetch_assoc($result_max)) {
    $player_id = (int)$row_max['max_id'] + 1;
} else {
    $player_id = 1;
}

$sql = "INSERT INTO Nba_Players (player_id, player_name, team, position, height, points_per_game, assists_per_game)
VALUES ('$player_id', '$player_name', '$team', '$position', '$height', '$points_per_game', '$assists_per_game')";

$resultado = mysqli_query($conn, $sql);

include("./header.html");
?>

<div class="container">
    <?php
    if (!$resultado) {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
    } else {
        echo "New record created successfully";
    }
    
    mysqli_close($conn);
    ?>

    <br/>
    <br/>
    <a href='index.php'>Back to the start</a>
</div>

<?php include("./footer.html"); ?>
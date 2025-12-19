<?php include("sesion.php"); ?>

<?php
include("config.php");

$sql = "SELECT player_id, player_name, team, position, points_per_game, assists_per_game FROM Nba_Players ORDER BY player_name";
$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} elseif (mysqli_num_rows($result) > 0) {

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // MEJORA: Usar border-collapse para que se vea mejor (CSS inline simple)
    echo "<table border='1' style='border-collapse: collapse; width: 100%; color:black'>";
    
    // MEJORA: Estructura semántica con thead
    echo "<thead>";
    echo "<tr>
            <th>PlayerID</th>
            <th>Player Name</th>
            <th>Team</th>
            <th>Position</th>            
            <th>Points_per_game</th>
            <th>Assists_per_game</th>
          </tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach ($rows as $row) {
        echo "<tr>";
        // Es buena práctica usar htmlspecialchars para evitar ataques XSS si los datos vienen de usuarios
        echo "<td>" . htmlspecialchars($row["player_id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["player_name"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["team"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["position"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["points_per_game"]) . "</td>";        
        echo "<td>" . htmlspecialchars($row["assists_per_game"]) . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";

    echo "</table>";

} else {
    echo "0 results";
}

mysqli_close($conn);
?>

<?php include("footer.html"); ?>
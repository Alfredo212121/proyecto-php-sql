<?php include("sesion.php"); ?>

<?php

include("config.php");


//Insert data in the table Nba_Players
$sql = "INSERT INTO  Nba_Players(player_id, player_name, team, position, height, points_per_game, assists_per_game)
VALUES ('8', 'Tanny Matterdace', 'Celtics', 'Center', '60.6', '34.0', '13.4');";

if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
else {
    echo "New record created successfully";
}

// Close connection
mysqli_close($conn);
?>

<?php include("footer.html"); ?>

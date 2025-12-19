<?php include("sesion.php"); ?>

<?php

include("config.php");


//Insert data in the table Nba_Players
$sql = "INSERT INTO  Nba_Players(player_id, player_name, team, position, height, points_per_game, assists_per_game)
VALUES ('7', 'Donni Tripp', 'Celtics', 'Small Forward', '75.4', '31.7', '4.4');";

if (mysqli_query($conn, $sql)==false) {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  
} else {
 $last_player_id = mysqli_insert_id($conn);
  echo "New record created successfully. <br> Last inserted ID is: " . $last_player_id;
}

// Close connection
mysqli_close($conn);
?> 

<?php include("footer.html"); ?>

<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php

include("config.php");

// sql to delete a record
$sql = "DELETE FROM Nba_Players WHERE player_id=3";

if (!mysqli_query($conn, $sql)) {
    echo "Error deleting record: " . mysqli_error($conn);
} elseif (mysqli_affected_rows($conn)==0){ //Ese id no existe

    echo "Record doesn't exist. Impossible to delete it.";}
else{
    echo "Record deleted successfully";
}

// Close connection
mysqli_close($conn);
?> 

<?php include("footer.html"); ?>

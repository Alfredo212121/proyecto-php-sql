<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php

include("config.php");
include("recoge.php");

$player_id = recoge("player_id");

if ($player_id == "") {
    header("Location: id.php");
    exit();
}

$sql = "DELETE FROM Nba_Players WHERE player_id=$player_id";

if (!mysqli_query($conn, $sql)) {
    echo "Error deleting record: " . mysqli_error($conn);
} elseif (mysqli_affected_rows($conn)==0){ 

    echo "Record doesn't exist. Impossible to delete it.";}
else{
    echo "Record deleted successfully";
}

print "<br/>";
print "<br/>";
print "<a href='index.php'>Back to the start</a>";

mysqli_close($conn);

?> 

<?php include("footer.html"); ?>
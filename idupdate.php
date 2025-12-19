<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php
include("config.php");
include ("recoge.php");


$player_id = recoge("player_id");
$player_name = recoge("player_name");

if ($player_id == "" || $player_name == "") {
    header("Location: update.php");
    exit();
}

$sql = "UPDATE Nba_Players SET player_name='$player_name' WHERE player_id=$player_id";

if (!mysqli_query($conn, $sql)) {
    echo "Error updating record: " . mysqli_error($conn);
} elseif (mysqli_affected_rows($conn) == 0) {
    echo "Record doesn't exist or data is the same. Impossible to update it.";
} else {
    echo "Record updated successfully";
}

mysqli_close($conn);
?>

<?php include("./footer.html"); ?>
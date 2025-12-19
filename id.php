<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>
<?php include("db_connect.php"); ?>

<h1>Delete Player</h1>

<form action="iddelete.php" method="post">

    <label>Introduce the  player_ID of the player to delete</label>
    <br/>
    <input type="number" name="player_id" required>
    <br/>
    <p><input type="submit" value="Send"></p>

</form>

<?php include("./footer.html"); ?>
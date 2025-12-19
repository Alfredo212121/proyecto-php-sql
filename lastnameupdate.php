<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php include("config.php"); ?>

<h1>Update the player name</h1>

<form action="lastnameupdateconf.php" method="post">

    <label>Player ID to modify:</label>

    <br/>

    <input type="number" name="player_id" required/>

    <br/>

    <label>New name:</label>

    <br/>

    <input type="text" name="player_name" required/>
    
    <br/>

    <p><input type="submit" value="Send"></p>

</form>

<?php include("./footer.html"); ?>
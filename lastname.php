<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>
<?php include("config.php"); ?>

<h1>Filter of PlayerName</h1>

   <form action="lastnameconf.php" method="post">

    <br/>

    <label>Insert the player name to filter:</label>
    <input type="text" name="player_name" required/>

    <br/>

    <p><input type="submit" value="Send"></p>

<?php include("./footer.html"); ?>
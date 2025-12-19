<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>
<?php include("config.php"); ?>

<h1>Visualizer of the data order</h1>

<form action="orderconf.php" method="post">

    <label><strong>Select the field to order:</strong></label><br/>
    
    <input type="radio" id="fname" name="field" value="player_name" checked required>
    <label for="fname">Player Name</label><br>

    <input type="radio" id="lname" name="field" value="team">
    <label for="lname">Team</label><br>

    <input type="radio" id="telephone" name="field" value="position">
    <label for="phone">Position</label><br>


    <br/>

    <label><strong>Order acsending or descending:</strong></label><br/>

    <input type="radio" id="asc" name="order" value="ASC" checked required>
    <label for="asc">Acsending (A-Z)</label><br>

    <input type="radio" id="desc" name="order" value="DESC">
    <label for="desc">Descending (Z-A)</label><br>

    <br/>
    <p><input type="submit" value="Send"></p>

</form>

<?php include("./footer.html"); ?>
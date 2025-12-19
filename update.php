<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php
include("config.php");
?>

<h1>Actualizar Apellido del Usuario</h1>

<form action="idupdate.php" method="post">

    <label>ID del usuario a modificar</label>
    <br>
    <input type="number" name="player_id" required>
    <br>

    <label>Player Name: </label>
    <br>
    <input type="text" name="player_name" required>
    <br>

    <p><input type="submit" value="Enviar"></p>

</form>

<?php include("./footer.html"); ?>
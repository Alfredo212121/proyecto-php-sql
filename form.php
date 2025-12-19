<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php

include("config.php");

?>

<h1>What type of query do you want to do?</h1>

   <form action="testform.php" method="post">

    <br>
    <input type="radio" name="valor" value="insert" /> <label>Insert data through a form</label><br>
    <input type="radio" name="valor" value="lastname" /> <label>Display the data from the players whose name is a value introduced on a form</label><br>
    <input type="radio" name="valor" value="order" /> <label>Display all the data order ascending or descending with a value introduced on a fomr</label><br>
    <input type="radio" name="valor" value="delete" /> <label>Delete a player whose ID is introduced on a form</label><br>
    <input type="radio" name="valor" value="update" /> <label>Update the name of a player whose ID is introduced on a form</label><br>


    <p><input type="submit" value="Send"></p>

    <a href='index.php'>Back to the start</a>";


<?php include("./footer.html"); ?>
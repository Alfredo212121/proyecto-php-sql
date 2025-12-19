<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>
<?php include("config.php"); ?>

<h1>Inserts of data</h1>

   <form action="insertcheck.php" method="post">

    <br/>

    <label>Insert the playername</label>
    <input type="text" name="player_name" required/>
    
    <br/>

    <label>Insert the team:</label>
    <input type="text" name="team" required/>
    
    <br/>
 
    <label>Insert the position:</label>
    <input type="text" name="position" required/>
    
    <br/>

    <label>Insert the points per game:</label>
    <input type="number" name="points_per_game" step="any" required/>
    
    <br/>

    <label>Insert the assists per game:</label>
    <input type="number" name="assists_per_game" step="any" required/>
    
    <br/>

    <p><input type="submit" value="Send"></p>


<?php include("./footer.html"); ?>
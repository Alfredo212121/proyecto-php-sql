<?php include("sesion.php"); ?>
<?php include("cabecera.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="author" content="Alfredo Rivadulla Fuenmayor">
    <title>SQL+PHP</title>

</head>
<body>

<?php


if(!isset ($_SESSION["conectado"] )|| $_SESSION["conectado"] = false){
        header("Location:loginconf.php");

}

?>
<?php include("footer.html"); ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="author" content="Alfredo Rivadulla Fuenmayor">
    <title>ex4</title>
</head>
<body>

<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset ($_SESSION["conectado"] )|| $_SESSION["conectado"] = false){
        header("Location:loginconf.php");

}
?>

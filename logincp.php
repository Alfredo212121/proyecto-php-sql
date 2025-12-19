<?php

include("sesion.php");
include("recoge.php");

$user = recoge("user");
$password = recoge("password");
$value = recoge("valor");

$userLogin = "arf";
$passwordLogin = "arf";

// 1. Lógica de Login
// Nota: Si $value tiene datos (logout), nos saltamos la comprobación de login vacía
if (empty($value)) {
    if($user == "" || $password == "" || $user != $userLogin || $password != $passwordLogin){
        $_SESSION["conectado"] = false;  
        header("Location:loginconf.php");
        exit(); // Importante detener el script tras redirección
    } else {
        $_SESSION["conectado"] = true;  
        header("Location:index.php");
        exit();
    }
}

// 2. Lógica de Logout (Cerrar sesión)
if($value == "Si" || $value == "Yes"){ // Aceptamos "Si" o "Yes" por compatibilidad
    session_destroy();
    // Aquí NO redirigimos inmediatamente para poder mostrar el mensaje de despedida abajo
} elseif($value == "No"){
    $_SESSION["conectado"] = true;  
    header("Location:index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            background-color: #f8f9fa; 
            height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
        }
    </style>
</head>
<body>

    <?php // include("./header.html"); ?>

    <div class="card text-center shadow p-4" style="max-width: 400px; width: 100%;">
        <div class="card-body">
            <h3 class="text-success mb-3">See you soon!</h3>
            <p class="mb-4">You have succesfully logged out.</p>
            <a href="loginconf.php" class="btn btn-primary w-100">Back to the login</a>
        </div>
    </div>

    <?php // include("./footer.html"); ?>

</body>
</html>
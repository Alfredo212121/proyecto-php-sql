<?php
// 1. Iniciar la sesión para tener acceso a ella
session_start();

// 2. Destruir todas las variables de sesión (limpia el array $_SESSION)
$_SESSION = array();

// 3. Borrar la cookie de sesión del navegador (esto asegura que la sesión muera totalmente)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// 4. Destruir la sesión en el servidor
session_destroy();

// 5. Redirigir al usuario al login (index.php o login.php)
header("Location: index.php");
exit;
?>
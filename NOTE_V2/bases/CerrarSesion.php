<?php   // Archivo que permite cerrar la sesion del usuario
// Inicia la sesión para poder acceder a las variables de sesión
session_start(); 

// Elimina todas las variables de sesión establecidas
session_unset();

// Destruye la sesión actual, eliminando todos los datos asociados a ella
session_destroy();

// Redirige al usuario a la página de inicio (index.php)
header("Location: ../bases/index.php");

// Asegura que no se ejecute más código después de la redirección
exit();
?>
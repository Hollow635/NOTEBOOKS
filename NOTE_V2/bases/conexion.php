<?php
// Archivo que conecta la base de datos

$db_host = 'localhost';        // Dirección del servidor de base de datos
$db_user = 'root';             // Usuario de la base de datos
$db_pass = '';                 // Contraseña del usuario
$db_name = 'pp_note';          // Nombre de la base de datos

// Establece la conexión a la base de datos utilizando mysqli
$conex = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Verifica si la conexión ha fallado
if (!$conex) {
    // Si la conexión falla, muestra un mensaje de error y detiene la ejecución del script
    die("Conexión fallida: " . mysqli_connect_error());
}

// Establecer el conjunto de caracteres a UTF-8
mysqli_set_charset($conex, 'utf8');

// Aquí puedes agregar cualquier configuración adicional si es necesario

// Función para cerrar la conexión (opcional)
// Puedes llamarla al final de tus scripts que usan esta conexión
function cerrar_conexion($conexion) {
    mysqli_close($conexion);
}
?>

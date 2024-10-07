<?php // Archivo que trabaja en conjunto con otros para actualizar la contraseña
// Incluye el archivo de conexión a la base de datos
include("../bases/conexion.php");

// Verifica si se ha enviado el formulario para cambiar la contraseña
if (isset($_POST['change_password'])) {
    // Limpia y almacena el email y las nuevas contraseñas ingresadas
    $email = trim($_POST['email']);
    $new_password = trim($_POST['new_password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Verifica si las nuevas contraseñas coinciden
    if ($new_password === $confirm_password) {
        // Hashea la nueva contraseña para almacenarla de forma segura
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Prepara la consulta para actualizar la contraseña en la base de datos
        $updateQuery = $conex->prepare("UPDATE usuario SET contraseña = ? WHERE email = ?");
        // Asocia los parámetros de la consulta
        $updateQuery->bind_param("ss", $hashed_password, $email);

        // Ejecuta la consulta y verifica si fue exitosa
        if ($updateQuery->execute()) {
            // Muestra un mensaje de éxito y redirige al usuario a la página de inicio de sesión
            echo "<h3 class='success'>Contraseña actualizada correctamente. Redirigiendo a la página de inicio de sesión...</h3>";
            echo "<script>setTimeout(function() { window.location.href = '../bases/login.php'; }, 3000);</script>";
        } else {
            // Muestra un mensaje de error si hubo un problema al actualizar la contraseña
            echo "<h3 class='error'>Ocurrió un error al actualizar la contraseña. Por favor, inténtelo de nuevo.</h3>";
        }

        // Cierra la consulta preparada
        $updateQuery->close();
    } else {
        // Muestra un mensaje de error si las contraseñas no coinciden
        echo "<h3 class='error'>Las contraseñas no coinciden. Por favor, intente de nuevo.</h3>";
        // Redirige al usuario a la página para cambiar la contraseña después de 3 segundos
        echo "<script>setTimeout(function() { window.location.href = '../bases/cambiar_password.php'; }, 3000);</script>";
    }
}
?>
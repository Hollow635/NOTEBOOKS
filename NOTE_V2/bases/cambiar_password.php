<!DOCTYPE html>  <!-- Archivo que trabaja en conjunto con otros para actualizar la contraseña-->
<html lang="en">
<head>
    <!-- Define el conjunto de caracteres para el documento -->
    <meta charset="UTF-8">
    <!-- Asegura que el diseño sea responsivo en diferentes dispositivos -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título que aparecerá en la pestaña del navegador -->
    <title>Cambiar Contraseña</title>
    <!-- Enlace a la hoja de estilos CSS para aplicar estilos a la página -->
    <link rel="stylesheet" href="../estilos/login_style.css">
    <!-- Enlace al ícono que aparecerá en la pestaña del navegador -->
    <link rel="icon" href="../imagenes/logo.ico">
</head>
<body>

    <?php
    // Obtiene el email de la URL, si existe, y lo limpia para evitar inyecciones XSS
    $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
    ?>

    <!-- Formulario para cambiar la contraseña -->
    <form action="../bases/actualizar_password.php" method="post">
        <!-- Campo oculto para enviar el email al script de actualización de contraseña -->
        <input type="hidden" name="email" value="<?php echo $email; ?>">

        <div class="form-header">
            <h2>Establecer Nueva Contraseña</h2> <!-- Encabezado del formulario -->
        </div>

        <div class="input-wrapper">
            <!-- Campo para ingresar la nueva contraseña -->
            <input type="password" name="new_password" placeholder="Nueva Contraseña" required="">
        </div>

        <div class="input-wrapper">
            <!-- Campo para confirmar la nueva contraseña -->
            <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required="">
        </div>

        <!-- Botón para enviar el formulario y cambiar la contraseña -->
        <input class="btn" type="submit" name="change_password" value="Cambiar Contraseña">
    </form>
    
</body>
</html>
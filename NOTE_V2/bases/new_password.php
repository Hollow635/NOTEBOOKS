<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define el conjunto de caracteres para el documento -->
    <meta charset="UTF-8">
    <!-- Configura la vista para dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título de la página que aparecerá en la pestaña del navegador -->
    <title>Recuperar Contraseña</title>
    <!-- Enlace a la hoja de estilos CSS para el diseño de la página -->
    <link rel="stylesheet" href="../estilos/login_style.css">
    <!-- Enlace al ícono que aparecerá en la pestaña del navegador -->
    <link rel="icon" href="../imagenes/logo.ico">
</head>
<body>

    <!-- Formulario para recuperar contraseña -->
    <form action="verificar_usuario.php" method="post">
        <div class="form-header">
            <!-- Logo de la institución -->
            <img src="../imagenes/OK.png" alt="Logo" class="header-image">
            <!-- Título del formulario -->
            <h2>Recuperar su contraseña</h2>
        </div>

        <!-- Instrucciones para el usuario -->
        <p>Ingrese su Email para continuar con el cambio de contraseña</p>
        <div class="input-wrapper"> <!-- Contenedor para el campo de correo electrónico -->
            <!-- Campo de entrada para el correo electrónico, requerido -->
            <input type="email" name="email" placeholder="Correo Electrónico" required="">
        </div>

        <!-- Botón para enviar el formulario -->
        <input class="btn" type="submit" name="verify" value="Continuar">

        <!-- Enlace para volver a la página de inicio -->
        <p><a href="../bases/index.php" class="create-account">Volver al inicio</a></p>
    
    </form>
    
</body>
</html>

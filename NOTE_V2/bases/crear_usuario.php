<!DOCTYPE html>   <!-- Formulario para que ul usuario pueda registrarse, solo front-end  -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Administrador</title>
    <link rel="stylesheet" href="../estilos/register_style.css"> <!-- Asegúrate de que la ruta sea correcta -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../imagenes/logo.ico">
</head>
<body>

    <!-- Encabezado del formulario de registro -->
    <form method="POST" action="../bases/registrar_admin.php">
        <div class="form-header">
            <h2>Registrar Administrador</h2>
        </div>
        
        <div class="input-wrapper">
            <!-- Etiqueta y campo de entrada para el nombre -->
            <input type="text" name="nombre" id="nombre" placeholder="Nombre Completo" required>
        </div>
        
        <div class="input-wrapper">
            <!-- Etiqueta y campo de entrada para el correo electrónico -->
            <input type="email" name="email" id="email" placeholder="Correo Electrónico" required>
        </div>
        
        <div class="input-wrapper">
            <!-- Etiqueta y campo de entrada para la contraseña -->
            <input type="password" name="password" id="password" placeholder="Contraseña" required="">
                <i class='bx bx-show-alt' id="toggle-password"></i>
        </div>
        
        <!-- Botón para enviar el formulario -->
        <input class="btn" type="submit" value="Registrar">
        
        <!-- Enlace para volver a la página anterior o al inicio -->
        <p><a href="../bases/index.php" class="create-account">Volver al inicio</a></p>
    </form>
    <script src="../js/script.js"></script>
</body>
</html>

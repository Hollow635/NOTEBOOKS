<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define el conjunto de caracteres para el documento -->
    <meta charset="UTF-8">
    <!-- Asegura que el diseño sea responsivo en diferentes dispositivos -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título que aparecerá en la pestaña del navegador -->
    <title>Registro de Profesores - OK NOTEBOOKS</title>
    <!-- Enlace a la hoja de estilos CSS para aplicar estilos a la página -->
    <link rel="stylesheet" href="../estilos/register_style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Icono que aparecerá en la pestaña del navegador -->
    <link rel="icon" href="../imagenes/logo.ico">
</head>
<body>

    <!-- Formulario para el registro de profesores -->
    <form method="post">
        <div class="form-header">
            <img src="../imagenes/OK.png" alt="Logo" class="header-image">
            <h2>Registro de profes</h2>
        </div>

        <div class="input-wrapper">  <!-- Campo para el nombre completo -->
            <input type="text" name="name" placeholder="Nombre Completo" required="">
        </div>

        <div class="input-wrapper"> <!-- Campo para el correo electrónico --> 
            <input type="email" name="email" placeholder="Correo Electronico" required="">
        </div>

        <div class="input-wrapper"> <!-- Campo para la contraseña -->
            <input type="password" name="password" id="password" placeholder="Contraseña" required="">
            <i class='bx bx-show-alt' id="toggle-password"></i>
		</div>

        <!-- Botón para enviar el formulario -->
        <input class="btn" type="submit" name="register" value="Enviar">

        <!-- Enlaces para iniciar sesión o registrarse como alumno -->
        <p>Ya tienes un usuario? -> <a href="../bases/login.php" class="create-account">Ingrese aqui</a></p>
        <p>Si es un alumno ingrese en el siguiente enlace -> <a href="../bases/register_alumno.php" class="create-account">Ingrese aqui</a></p>
        <p><a href="../bases/index.php" class="create-account">  <--Volver al inicio</a></p>
        <!-- Enlace para acceso especial -->
        <a href="../bases/acceso_especial.php" class="acceso-especial">Acceso Especial</a>
    </form>

    <!-- Incluye el archivo para manejar el registro de profesores -->
    <?php
        include("../bases/RegistrarProfe.php");
    ?>
    <script src="../js/script.js"></script>
</body>
</html>
<!DOCTYPE html>  <!-- PRIMERA PAGINA QUE SALE AL CARGAR EL SERVICIO -->
<html lang="es">
<head>
    <!-- Especifica el conjunto de caracteres para el documento -->
    <meta charset="UTF-8">
    <!-- Hace que el diseño sea responsivo, ajustándose al tamaño de la pantalla del dispositivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título de la página que aparecerá en la pestaña del navegador -->
    <title>Inicio</title>
    <!-- Enlace a la hoja de estilos CSS para aplicar estilos a la página -->
    <link rel="stylesheet" href="../estilos/index_style.css"> 
    <!-- Icono que aparecerá en la pestaña del navegador -->
    <link rel="icon" href="../imagenes/logo.ico">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">
                <!-- Imagen del logo de la escuela con un texto alternativo -->
                <img src="../imagenes/OK.png" alt="Logo Otto Krause">
                <div class="header-text">
                    <!-- Sección para texto adicional del encabezado (actualmente vacía) -->
                </div>
            </div>
            <div class="auth-buttons">
                <!-- Botón para redirigir a la página de inicio de sesión -->
                <button onclick="window.location.href='../bases/login.php'">Iniciar Sesion</button>
                <!-- Botón para redirigir a la página de registro de alumnos -->
                <button onclick="window.location.href='../bases/register_alumno.php'">Registrarse</button>
            </div>
        </div>
    </header>
    <main>
        <!-- Título principal de la página -->
        <h1>Bienvenido al sistema de prestamo de Notebooks de la escuela Otto Krause</h1>
        <!-- Descripción del servicio de préstamo de computadoras -->
        <p>En este servicio de la escuela, los alumnos y profesores podrán realizar el préstamo de Computadoras
            de forma rápida y anticipada para poder usarlas</p>
        <!-- Información sobre la necesidad de tener una cuenta para acceder al sistema -->
        <p>Para ello tendrán que tener una cuenta o usuario accesible al sistema</p>
        <!-- Enlace para que los usuarios se registren si no tienen cuenta -->
        <p>No tiene un usuario creado? <a href="../bases/register_alumno.php">Registrese Aqui</a></p>
        <!-- Enlace a la página de preguntas frecuentes para resolver dudas -->
        <p>Si usted tiene dudas sobre como funciona el servicio, visite nuestra página de preguntas frecuentes -> <a href="guia.php">Guia de usuario</a></p>
        <!-- Créditos para el equipo que creó el sistema -->
        <h2>Sistema creado por el equipo Compilando Compus(6°2° COM)</h2>
    </main>
</body>
</html>

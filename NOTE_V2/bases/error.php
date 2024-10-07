<!DOCTYPE html>   <!-- Archivo que dice que la pagina no esta disponible por el momento -->
<html lang="es">
<head>
    <!-- Define el conjunto de caracteres para el documento -->
    <meta charset="UTF-8">
    <!-- Indica que el contenido debe ser renderizado en modo compatibilidad para Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Configura la vista para dispositivos móviles, asegurando un diseño responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título que aparecerá en la pestaña del navegador -->
    <title>Falla en la busqueda</title>
    <!-- Enlace a la hoja de estilos CSS para aplicar estilos a la página de error -->
    <link rel="stylesheet" href="../estilos/error.css">
    <!-- Enlace al ícono que aparecerá en la pestaña del navegador -->
    <link rel="icon" href="../imagenes/logo.ico">
</head>
<body>
    <!-- Contenedor principal para la página de error -->
    <div class="error-page">
        <div class="content">
            <!-- Título que indica que la página no fue encontrada -->
            <h4 data-text="Pagina no encontrada">Pagina no encontrada</h4>
            <!-- Mensaje de error informando al usuario sobre la inexistencia de la página -->
            <p>Perdon, la pagina que esta buscando no existe. Le pedimos que nos disculpe y vuelva en otra ocasion</p>
            <div class="btns">
                <!-- Botón que redirige al usuario de vuelta a la página principal -->
                <button onclick="window.location.href='../bases/servicio_basico.php'">Volver</button>
            </div>
        </div>
    </div>
</body>
</html>

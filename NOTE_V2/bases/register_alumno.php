<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Especifica el conjunto de caracteres para el documento -->
    <meta charset="UTF-8">
    <!-- Hace que el diseño sea responsivo, ajustándose al tamaño de la pantalla del dispositivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título de la página que aparecerá en la pestaña del navegador -->
    <title>Registro de Alumnos - OK NOTEBOOKS</title>
    <!-- Enlace a la hoja de estilos CSS para aplicar estilos a la página -->
    <link rel="stylesheet" href="../estilos/register_style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Icono que aparecerá en la pestaña del navegador -->
    <link rel="icon" href="../imagenes/logo.ico">
    <script>
        // Función para validar la entrada de la división
        function validateDivision() {
            var divisionInput = document.getElementById('division');
            var especialidadInput = document.getElementById('especialidad-wrapper');
            var divisionValue = divisionInput.value;

            // Expresión regular para verificar que solo se ingresen números y el símbolo '°'
            if (!/^[\d°]*$/.test(divisionValue)) {
                divisionInput.setCustomValidity("Por favor, ingrese solo números y el símbolo '°'.");
                divisionInput.reportValidity(); // Muestra el mensaje de error
                return;
            }

            divisionInput.setCustomValidity(""); // Restablece el mensaje de error

            // Limpia el valor y obtiene el primer dígito
            var cleanDivisionValue = divisionValue.replace('°', ''); 
            var firstDigit = parseInt(cleanDivisionValue.charAt(0));

            // Valida que el primer dígito esté entre 1 y 6
            if (isNaN(firstDigit) || firstDigit < 1 || firstDigit > 6) {
                divisionInput.setCustomValidity("El Año debe ser entre 1 y 6.");
            } else {
                divisionInput.setCustomValidity(""); // Restablece el mensaje de error
                // Si el año es 3 o más, muestra la sección de especialidad
                if (firstDigit >= 3) {
                    especialidadInput.style.display = 'block'; 
                    document.getElementById('especial').required = true; // Hace que el campo sea obligatorio
                } else {
                    // Oculta la sección de especialidad si el año es menor a 3
                    especialidadInput.style.display = 'none'; 
                    document.getElementById('especial').required = false; // No es obligatorio
                }
            }
        }
    </script>
</head>
<body>

    <!-- Formulario para el registro de alumnos -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="form-header">
            <img src="../imagenes/OK.png" alt="Logo" class="header-image">
            <h2>Registro de alumnos</h2>
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

        <div class="input-wrapper"> <!-- Campo para la división -->
            <input type="text" name="division" id="division" placeholder="Division" required="" oninput="validateDivision()">
		</div>

        <div class="input-wrapper" id="especialidad-wrapper" style="display:none;"> <!-- Campo para la especialidad -->
            <select name="especial" id="especial">
                <option value="" disabled selected>Selecciona tu Especialidad</option>
                <option value="Computacion">Computacion</option>
                <option value="Construcciones">Construcciones</option>
                <option value="Electricidad">Electricidad</option>
                <option value="Electronica">Electronica</option>
                <option value="Mecanica">Mecanica</option>
                <option value="Quimica">Quimica</option>
            </select>
		</div>

        <!-- Botón para enviar el formulario -->
        <input class="btn" type="submit" name="register" value="Enviar">

        <!-- Enlaces para iniciar sesión o registrarse como profesor -->
        <p>Ya tienes un usuario? -> <a href="../bases/login.php" class="create-account">Ingrese aqui</a></p>
        <p>Si es un profesor ingrese al siguiente enlace -> <a href="../bases/register_profe.php" class="create-account">Ingrese aqui</a></p>
        <p><a href="../bases/index.php" class="create-account">  <--Volver al inicio</a></p>
    </form>

    <?php
        // Si el formulario ha sido enviado, incluye el archivo para registrar al alumno
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include("../bases/RegistrarAlumno.php");
        }
    ?>
    <script src="../js/script.js"></script>
</body>
</html>
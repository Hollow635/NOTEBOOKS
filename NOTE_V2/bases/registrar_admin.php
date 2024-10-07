<?php
// Incluir el archivo de conexión a la base de datos
include("../bases/conexion.php");

// Verificar si se recibió una solicitud POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre = mysqli_real_escape_string($conex, $_POST['nombre']);
    $email = mysqli_real_escape_string($conex, $_POST['email']);
    $contraseña = mysqli_real_escape_string($conex, $_POST['password']); // Asegúrate de usar 'password'
    
    // Encriptar la contraseña
    $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);
    
    // Asignar tipo de usuario
    $tipo_usuario = 'admin'; // Asignamos admin directamente

    $fecha = date('Y-m-d H:i:s'); // Fecha actual

    // Verificar si el email ya está registrado
    $checkEmailQuery = $conex->prepare("SELECT * FROM usuario WHERE email = ?");
    if (!$checkEmailQuery) {
        die("Error en la preparación de la consulta: " . $conex->error);
    }

    $checkEmailQuery->bind_param("s", $email);
    if (!$checkEmailQuery->execute()) {
        die("Error al ejecutar la consulta de verificación de correo: " . $checkEmailQuery->error);
    }

    $checkEmailQuery->store_result();

    if ($checkEmailQuery->num_rows > 0) {
        // Mensaje de error y redirección
        echo "<h3 class='error'>El correo ya está registrado. Por favor, use un correo diferente.</h3>";
        header("refresh:3; url=../bases/crear_usuario.php");
        exit();
    } else {
        // Preparar la consulta para insertar el nuevo administrador
        $consulta = $conex->prepare("INSERT INTO usuario (nombre, email, contraseña, tipo_usuario, fecha) VALUES (?, ?, ?, ?, ?)");
        if ($consulta) { 
            $consulta->bind_param("sssss", $nombre, $email, $contraseña_hash, $tipo_usuario, $fecha);
            if ($consulta->execute()) {
                // Mensaje de éxito y redirección
                echo "<h3>Administrador registrado exitosamente. Redirigiendo a Login</h3>";
                header("refresh:3; url=../bases/login.php");
                exit();
            } else {
                echo "<h3 class='error'>Ocurrió un error al registrarse: " . $consulta->error . "</h3>";
            }
            $consulta->close(); 
        } else {
            echo "<h3 class='error'>Error en la preparación de la consulta de inserción: " . $conex->error . "</h3>";
        }
    }

    $checkEmailQuery->close();
    mysqli_close($conex);
} else {
    header("Location: ../bases/crear_usuario.php");
    exit();
}
?>
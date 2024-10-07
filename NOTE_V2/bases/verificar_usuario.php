<?php
// Incluye el archivo de conexión a la base de datos
include("../bases/conexion.php");

// Verifica si se ha enviado el formulario
if (isset($_POST['verify'])) {
    // Obtiene el correo electrónico del formulario y elimina espacios en blanco
    $email = trim($_POST['email']);

    // Prepara una consulta para verificar si el correo está registrado en la base de datos
    $checkEmailQuery = $conex->prepare("SELECT * FROM usuario WHERE email = ?");
    // Asocia el parámetro de la consulta con el correo electrónico
    $checkEmailQuery->bind_param("s", $email);
    // Ejecuta la consulta
    $checkEmailQuery->execute();
    // Almacena el resultado de la consulta
    $checkEmailQuery->store_result();

    // Verifica si se encontró al menos un usuario con el correo proporcionado
    if ($checkEmailQuery->num_rows > 0) {
        // Si el correo está registrado, redirige a la página para cambiar la contraseña, pasando el correo como parámetro
        header("Location: ../bases/cambiar_password.php?email=" . urlencode($email));
        exit(); // Termina la ejecución del script
    } else {
        // Si el correo no está registrado, muestra un mensaje de alerta y redirige de nuevo al formulario
        echo "<script>
                alert('El correo ingresado no está registrado. Por favor, ingrese un correo válido.');
                window.location.href = '../bases/new_password.php';
              </script>";
    }

    // Cierra la consulta preparada
    $checkEmailQuery->close();
}
?>
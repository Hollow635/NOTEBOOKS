<?php
// Incluye el archivo de conexión a la base de datos
include("../bases/conexion.php");

// Verifica si se ha enviado el formulario de registro
if (isset($_POST['register'])) {
    // Verificamos si se llenaron todos los campos
    if (
        strlen($_POST['name']) >= 1 && // Verifica que el nombre no esté vacío
        strlen($_POST['email']) >= 1 && // Verifica que el email no esté vacío
        strlen($_POST['password']) >= 1 // Verifica que la contraseña no esté vacía
    ) {
        // Limpia y almacena los datos ingresados
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        // Hashea la contraseña para almacenarla de forma segura
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $fecha = date("Y-m-d"); // Obtiene la fecha actual
        $tipo_usuario = "Profesor";  // Asigna siempre el tipo de usuario como "Profesor"

        // Verifica si el email ya está registrado en la base de datos
        $checkEmailQuery = $conex->prepare("SELECT * FROM usuario WHERE email = ?");
        if (!$checkEmailQuery) {
            die("Error en la preparación de la consulta: " . $conex->error);
        }

        // Asocia el parámetro de la consulta
        $checkEmailQuery->bind_param("s", $email);
        // Ejecuta la consulta y verifica si hubo un error
        if (!$checkEmailQuery->execute()) {
            die("Error al ejecutar la consulta de verificación de correo: " . $checkEmailQuery->error);
        }

        // Almacena el resultado de la consulta
        $checkEmailQuery->store_result();

        // Verifica si se encontró un registro con el mismo email
        if ($checkEmailQuery->num_rows > 0) {
            ?>
            <h3 class="error">El correo ya está registrado. Por favor, use un correo diferente.</h3>
            <?php
        } else {
            // Prepara la consulta para insertar el nuevo usuario
            $consulta = $conex->prepare("INSERT INTO usuario(nombre, email, contraseña, tipo_usuario, fecha) VALUES (?, ?, ?, ?, ?)");
            if ($consulta) { 
                // Asocia los parámetros y ejecuta la consulta de inserción
                $consulta->bind_param("sssss", $name, $email, $hashed_password, $tipo_usuario, $fecha);
                if ($consulta->execute()) {
                    ?>
                    <h3 class="success">Tu registro como profesor se ha completado</h3>
                    <?php
                } else {
                    ?>
                    <h3 class="error">Ocurrió un error al registrarse: <?php echo $consulta->error; ?></h3>
                    <?php
                }
                $consulta->close(); // Cierra la consulta preparada
            } else {
                ?>
                <h3 class="error">Error en la preparación de la consulta de inserción: <?php echo $conex->error; ?></h3>
                <?php
            }
        }

        $checkEmailQuery->close(); // Cierra la consulta de verificación de email
    } else {
        ?>
        <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}
?>

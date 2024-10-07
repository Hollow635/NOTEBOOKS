<!-- acceso_especial.php -->
<!-- script en conjunto con otros que registrarse como admininistrador -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Especial</title>
    <link rel="stylesheet" href="../estilos/register_style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../imagenes/logo.ico">
</head>
<body>
    <div class="form-container">
        <!-- Formulario para ingresar la contraseña de acceso especial -->
        <form method="POST" action="../bases/acceso_especial.php">
            <h2>Acceso Especial</h2> <!-- Mueve el título aquí -->
            <div class="input-wrapper">
                <input type="password" name="password" id="password" placeholder="Contraseña" required="">
                <i class='bx bx-show-alt' id="toggle-password"></i>
            </div>
            <input class="btn" type="submit" name="register" value="Acceder">
        </form>
        
        <?php
        // Verifica si el formulario ha sido enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $password = $_POST['password'];

            if ($password === 'Sarmiento') {  //Si queres cambiar la contraseña solo cambia lo que esta entre comillas
                header("Location: ../bases/crear_usuario.php");
                exit();
            } else {
                echo "<script>
                alert('Clave de acceso incorrecta. Intente nuevamente o comuniquese con el soporte.');
                window.location.href = '../bases/acceso_especial.php';
              </script>";
            }
        }
        ?>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
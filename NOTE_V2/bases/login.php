<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="../estilos/login_style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="../imagenes/logo.ico">
</head>
<body>

    <form action="../bases/IniciarSesion.php" method="post">
        <div class="form-header">
            <img src="../imagenes/OK.png" alt="Logo" class="header-image">
            <h2>Iniciar Sesion</h2>
        </div>

        <?php if (isset($_GET['error'])): ?>
            <p class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></p>
        <?php endif; ?>

        <div class="input-wrapper"> 
            <input type="email" name="email" placeholder="Correo Electronico" required="">
        </div>

        <div class="input-wrapper">
            <input type="password" name="password" id="password" placeholder="Contraseña" required="">
            <i class='bx bx-show-alt' id="toggle-password"></i>
        </div>

        <p><a href="new_password.php" class="create-account">Olvidaste la contraseña?</a></p>

        <input class="btn" type="submit" name="register" value="Iniciar Sesion">

        <p><a href="../bases/register_alumno.php" class="create-account">Registrarse como alumno</a></p>
        <p><a href="../bases/register_profe.php" class="create-account">Registrarse como profesor</a></p>
    </form>

    <script src="../js/script.js"></script>
</body>
</html>
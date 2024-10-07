<?php
// Inicia la sesión para poder usar variables de sesión
session_start();

// Establece un tiempo de expiración para la sesión (en segundos)
$session_timeout = 1800; // 30 minutos

// Establece los parámetros de la cookie de la sesión para mejorar la seguridad
if (empty(session_id())) {
    // Si la sesión no tiene ID (para evitar la fijación de sesión), establece parámetros seguros
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params([
        'lifetime' => $cookieParams["lifetime"],  // Duración de la cookie
        'path' => $cookieParams["path"],          // Ruta en la que la cookie está disponible
        'domain' => $cookieParams["domain"],      // Dominio
        'secure' => true,                         // Solo enviar la cookie por HTTPS
        'httponly' => true,                       // La cookie no es accesible via JavaScript
        'samesite' => 'Strict'                    // Previene el envío de la cookie en peticiones cross-site
    ]);
}

// Verifica si la sesión ya ha sido iniciada
if (isset($_SESSION['last_activity'])) {
    $inactive = time() - $_SESSION['last_activity'];

    // Si ha pasado más tiempo del permitido, destruye la sesión
    if ($inactive > $session_timeout) {
        session_unset();
        session_destroy();
        echo "<script>alert('Tu sesión ha expirado. Por favor, inicie sesión nuevamente.'); window.location.href='../bases/login.php';</script>";
        exit();
    }
}

// Actualiza el tiempo de actividad
$_SESSION['last_activity'] = time();

// Establece la conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "pp_note");

// Verifica si hubo un error al conectar a la base de datos
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verifica si se ha enviado el formulario a través del método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura el email y la contraseña del formulario con validación
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars(trim($_POST['password']));

    // Asegúrate de que el email es válido
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('El formato del email no es válido'); window.location.href='../bases/login.php';</script>";
        exit;
    }

    // Consulta para obtener la contraseña, nombre y tipo de usuario basado en el email
    $sql = "SELECT contraseña, nombre, tipo_usuario FROM usuario WHERE email = ?";
    $stmt = $conn->prepare($sql); // Prepara la consulta
    $stmt->bind_param("s", $email); // Asocia el parámetro
    $stmt->execute(); // Ejecuta la consulta
    $result = $stmt->get_result(); // Obtiene el resultado

    // Verifica si hay resultados para el email proporcionado
    if ($result->num_rows > 0) {
        // Recupera los datos del usuario
        $row = $result->fetch_assoc();
        $hashed_password = $row['contraseña']; // Contraseña hasheada
        $name = $row['nombre']; // Nombre del usuario
        $user_type = $row['tipo_usuario']; // Tipo de usuario

        // Verifica si la contraseña ingresada coincide con la hasheada
        if (password_verify($password, $hashed_password)) {
            // Regenera el ID de sesión para prevenir ataques de fijación de sesión
            session_regenerate_id(true);

            // Almacena el email y nombre en la sesión
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;

            // Redirige según el tipo de usuario
            if ($user_type === 'admin') {
                echo "<script>alert('Inicio de sesión exitoso como administrador'); window.location.href='../bases/Principal.php';</script>";
            } else {
                echo "<script>alert('Inicio de sesión exitoso como usuario'); window.location.href='../bases/servicio_basico.php';</script>";
            }
        } else {
            // Mensaje genérico de error si la contraseña no coincide
            echo "<script>alert('Credenciales incorrectas. Intente nuevamente.'); window.location.href='../bases/login.php';</script>";
        }
    } else {
        // Mensaje genérico si no se encontró un usuario
        echo "<script>alert('Credenciales incorrectas. Intente nuevamente.'); window.location.href='../bases/login.php';</script>";
    }

    // Cierra la declaración preparada
    $stmt->close();
}

// Cierra la conexión a la base de datos
$conn->close();
?>
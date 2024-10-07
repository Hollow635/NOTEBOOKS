<?php
session_start();

$email = $_SESSION['email'];
$name = $_SESSION['name'];

// Conexión a la base de datos
$servername = "localhost"; // Cambia esto si es necesario
$username = "root"; // Cambia esto por tu usuario
$password = ""; // Cambia esto por tu contraseña
$dbname = "pp_note"; // Nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener las computadoras
$sql = "SELECT NOMBRE AS id, estado FROM COMPUTADORA";
$result = $conn->query($sql);

$computers = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Clasificar computadoras según su estado
        $status = $row['estado'] == 'Disponible' ? 'available' : ($row['estado'] == 'Ocupada' ? 'unavailable' : 'maintenance');
        $computers[] = [
            'id' => $row['id'],
            'status' => $status,
            'message' => $status == 'available' ? 'Esta notebook se encuentra disponible' : ($status == 'unavailable' ? 'Esta notebook no está disponible, por favor elija otra.' : 'Esta notebook se encuentra en mantenimiento, no está disponible hasta nuevo aviso :(')
        ];
    }
} else {
    echo "No hay computadoras disponibles.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="../estilos/styles.css">
    <link rel="icon" href="../imagenes/logo.ico">
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="../imagenes/OK.png" alt="Escudo" class="logo"> 
        </div>
        <nav class="menu">
            <ul class="menu-list">
                <li class="menu-item">Nombre de Usuario: <br> <?php echo htmlspecialchars($name); ?> <br> Email: <?php echo htmlspecialchars($email); ?></li>  
                <li class="menu-item"><a href="../bases/CerrarSesion.php" class="logout-link">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-content">
        <div class="status-title">
            <h2>ESTADO DE LAS NOTEBOOKS</h2>
        </div>
        <div class="status-container">
            <?php foreach ($computers as $computer): ?>
                <div class="computer-item" onclick="openModal('modal<?php echo $computer['id']; ?>')">
                    <span><?php echo $computer['id']; ?></span>
                    <div class="status <?php echo $computer['status']; ?>"></div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <?php foreach ($computers as $computer): ?>
        <div id="modal<?php echo $computer['id']; ?>" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('modal<?php echo $computer['id']; ?>')">&times;</span>
                <p>Mensaje para <?php echo $computer['id']; ?>:</p>
                <p><?php echo $computer['message']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'block';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        window.onclick = function(event) {
            var modals = document.getElementsByClassName('modal');
            for (var i = 0; i < modals.length; i++) {
                if (event.target == modals[i]) {
                    modals[i].style.display = 'none';
                }
            }
        }
    </script>
</body>
</html>


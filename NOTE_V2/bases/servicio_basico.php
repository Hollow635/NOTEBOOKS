<?php
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['name'])) {
    header("Location: ../bases/login.php");
    exit();
}

$email = $_SESSION['email'];
$name = $_SESSION['name'];

// Aquí puedes definir el estado de las notebooks o cualquier otro contenido necesario
$computers = [  
    'A' => [  //notebooks de la seccion A
        ['id' => 'A01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'A02', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'A04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'A05', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'A07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'A09', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],
    
    'B' => [  //notebooks de la seccion B
        ['id' => 'B02', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'B03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'B04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'B06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'B10', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'C' => [  //notebooks de la seccion C
        ['id' => 'C01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'C03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'C06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'C07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],
    // esto continua hasta la letra z
    

    'D' => [  //notebooks de la seccion D
        ['id' => 'D03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'D04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'D07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'E' => [  //notebooks de la seccion E
        ['id' => 'E04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'E05', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'E06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'E07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'E08', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'E09', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'F' => [  //notebooks de la seccion F
        ['id' => 'F01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'F02', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'F06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'F07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'G' => [  //notebooks de la seccion G
        ['id' => 'G01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'G03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'G04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'G06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'G07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'H' => [  //notebooks de la seccion H
        ['id' => 'H01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'H03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'H04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'H06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'H07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'I' => [  //notebooks de la seccion I
        ['id' => 'I01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'I03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'I04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'I06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'I07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'J' => [  //notebooks de la seccion J
        ['id' => 'J01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'J03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'J04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'J06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'J07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'K' => [  //notebooks de la seccion K
        ['id' => 'K01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'K03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'K04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'K06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'K07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'L' => [  //notebooks de la seccion L
        ['id' => 'L01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'L03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'L04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'L06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'L07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'M' => [  //notebooks de la seccion M
        ['id' => 'M01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'M03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'M04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'M06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'M07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'N' => [  //notebooks de la seccion N
        ['id' => 'N01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'N03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'N04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'N06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'N07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'O' => [  //notebooks de la seccion O
        ['id' => 'O01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'O03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'O04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'O06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'O07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'P' => [  //notebooks de la seccion P
        ['id' => 'P01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'P03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'P04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'P06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'P07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'Q' => [  //notebooks de la seccion Q
        ['id' => 'Q01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'Q03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'Q04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'Q06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'Q07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],
    
    'R' => [  //notebooks de la seccion R
        ['id' => 'R01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'R03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'R04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'R06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'R07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'S' => [  //notebooks de la seccion S
        ['id' => 'S01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'S03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'S04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'S06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'S07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'T' => [  //notebooks de la seccion T
        ['id' => 'T01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'T03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'T04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'T06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'T07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'U' => [  //notebooks de la seccion U
        ['id' => 'U01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'U03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'U04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'U06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'U07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'V' => [  //notebooks de la seccion V
        ['id' => 'V01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'V03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'V04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'V06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'V07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'W' => [  //notebooks de la seccion W
        ['id' => 'W01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'W03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'W04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'W06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'W07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'X' => [  //notebooks de la seccion X
        ['id' => 'X01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'X03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'X04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'X06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'X07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'Y' => [  //notebooks de la seccion Y
        ['id' => 'Y01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'Y03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'Y04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'Y06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'Y07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],

    'Z' => [  //notebooks de la seccion Z
        ['id' => 'Z01', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'Z03', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'Z04', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'Z06', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        ['id' => 'Z07', 'status' => 'available', 'message' => 'Esta notebook se encuentra disponible, si desea pedirla presione en Pedir.'],
        // Agrega más notebooks según sea necesario
    ],
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
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
                <li class="menu-item"><a href="../bases/error.php">Guía Rápida</a></li>
                <li class="menu-item"><a href="../bases/CerrarSesion.php" class="logout-link">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-content">
        <div class="status-title">
        <h2 style="color: green;">ESTADO DE LAS NOTEBOOKS</h2>
        </div>
        <div class="status-container">
    <?php foreach (['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'] as $category): ?>
        <div class="computer-list">
            <?php foreach ($computers[$category] as $computer): ?>
                <div class="computer-item" onclick="openModal('modal<?php echo $computer['id']; ?>')">
                    <span><?php echo $computer['id']; ?></span>
                    <div class="status <?php echo $computer['status']; ?>"></div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>

        <!-- Botón para realizar el pedido de computadoras -->
    <div class="order-button-container" style="text-align: center; margin-top: 20px;">
        <input type="button" value="Ordenar" class="request-button" onclick="location.href='../bases/prestamo.php'">
    </div>
    </main>

    <?php foreach ($computers as $category => $computersList): ?>
        <?php foreach ($computersList as $computer): ?>
            <div id="modal<?php echo $computer['id']; ?>" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('modal<?php echo $computer['id']; ?>')">&times;</span>
                    <p>Mensaje para <?php echo $computer['id']; ?>:</p>
                    <p><?php echo $computer['message']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
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
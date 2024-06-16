<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login1.html");
    exit;
}

$email = $_SESSION['user'];
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "Error: No se encontró el usuario";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <h1>Perfil de Usuario</h1>
    <p><strong>Nombre:</strong> <?php echo $user['nombre']; ?></p>
    <p><strong>Apellido:</strong> <?php echo $user['apellido']; ?></p>
    <p><strong>DNI:</strong> <?php echo $user['dni']; ?></p>
    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
    <p><strong>Teléfono:</strong> <?php echo $user['telefono']; ?></p>
    <p><strong>Dirección:</strong> <?php echo $user['direccion']; ?></p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>

<?php
session_start();
include 'db.php'; // Archivo que contiene la conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['Rnombre'];
    $apellido = $_POST['Rapellido'];
    $dni = $_POST['Rdni'];
    $email = $_POST['Remail'];
    $telefono = $_POST['Rtelefono'];
    $direccion = $_POST['Rdireccion'];
    $password = password_hash($_POST['Rcontra'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (nombre, apellido, dni, email, telefono, direccion, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $nombre, $apellido, $dni, $email, $telefono, $direccion, $password);

    if ($stmt->execute()) {
        $_SESSION['user_id'] = $conn->insert_id;
        $_SESSION['user_email'] = $email;
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

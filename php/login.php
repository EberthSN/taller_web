<?php
session_start();
include 'db.php'; // Archivo que contiene la conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['Iemail'];
    $password = $_POST['Icontra'];

    $sql = "SELECT id, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['user_email'] = $email;
            header('Location: index.php');
            exit;
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "No existe una cuenta con ese correo electrónico.";
    }
}
?>

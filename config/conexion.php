<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "card";

$conexion = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_error()){
    echo "No se pudo conectar a la base de datos";
    exit();
}
mysqli_select_db($conexion,$dbname) or die("No se encuentra la base de datos");
mysqli_set_charset($conexion,"utf8");

?>

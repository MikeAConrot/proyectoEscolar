<?php
// Datos de conexión a la base de datos
$servername = "mikeawisder";  // Cambia esto al servidor de tu base de datos
$username = "root";  // Cambira esto a tu nombre de usuario de MySQL
$password = "root";  // Cambia esto a tu contraseña de MySQL
$dbname = "db";  // Cambia esto al nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

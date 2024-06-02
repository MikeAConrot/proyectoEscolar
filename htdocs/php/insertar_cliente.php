<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $empresa = $_POST["empresa"];
    $direccion = $_POST["direccion"];
    $codigo_postal = $_POST["codigo_postal"];
    $ciudad = $_POST["ciudad"];
    $estado = $_POST["estado"];
    $usuario = $_POST["usuario"];
    $nombre_usuario = $_POST["nombre_usuario"];
    $puesto = $_POST["puesto"];
    $correo_usuario = $_POST["correo_usuario"];
    $telefono = $_POST["telefono"];

    $sql = "INSERT INTO Clientes (Empresa, Direccion, CodigoPostal, Ciudad, Estado, Usuario, Nombre, Puesto, CorreoUsuario, Telefono)
            VALUES ('$empresa', '$direccion', '$codigo_postal', '$ciudad', '$estado', '$usuario', '$nombre_usuario', '$puesto', '$correo_usuario', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        echo "Cliente agregado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>



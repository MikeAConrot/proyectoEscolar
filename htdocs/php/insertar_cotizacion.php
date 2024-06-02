<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $membreteSuperior = $_POST['membrete_superior'];
    // Agrega más campos según sea necesario para cotizaciones

    // Insertar datos en la tabla de cotizaciones
    $sql = "INSERT INTO Cotizaciones (MembreteSuperior) VALUES ('$membreteSuperior')";
    // Agrega más campos según sea necesario para cotizaciones

    if ($conn->query($sql) === TRUE) {
        echo "Cotización creada correctamente";
    } else {
        echo "Error al crear cotización: " . $conn->error;
    }
}

$conn->close();
?>




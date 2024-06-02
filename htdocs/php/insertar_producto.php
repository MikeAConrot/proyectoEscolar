<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = isset($_POST['nombre_producto']) ? $_POST['nombre_producto'] : '';
    $descripcion = isset($_POST['descripcion_producto']) ? $_POST['descripcion_producto'] : '';
    $precioVenta = isset($_POST['precio_venta']) ? $_POST['precio_venta'] : '';
    $modificable = isset($_POST['modificable']) ? 1 : 0; // Convertir a 1 o 0

    // Insertar datos en la tabla ProductosServicios
    $sql = "INSERT INTO ProductosServicios (Nombre, Descripcion, PrecioVenta, Modificable) VALUES ('$nombre', '$descripcion', '$precioVenta', '$modificable')";

    if ($conn->query($sql) === TRUE) {
        echo "Producto agregado correctamente";
    } else {
        echo "Error al agregar producto: " . $conn->error;
    }
}

$conn->close();
?>





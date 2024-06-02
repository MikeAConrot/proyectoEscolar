<?php
include 'db_connection.php';

// Realizar la consulta a la base de datos
$result = $conn->query("SELECT * FROM ProductosServicios");

if (!$result) {
    die('Error en la consulta: ' . $conn->error);
}

// Mostrar la tabla
echo "<h2>Productos/Servicios</h2>";
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nombre</th>";
echo "<th>Descripción</th>";
echo "<th>Precio de Venta</th>";
echo "<th>Modificable</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['ProductoID']}</td>";
    echo "<td>{$row['Nombre']}</td>";
    echo "<td>{$row['Descripcion']}</td>";
    echo "<td>{$row['PrecioVenta']}</td>";
    echo "<td>{$row['Modificable']}</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

$conn->close();
?>




<?php
include 'db_connection.php';

// Realizar la consulta a la base de datos
$result = $conn->query("SELECT * FROM Cotizaciones");

if (!$result) {
    die('Error en la consulta: ' . $conn->error);
}

// Mostrar la tabla
echo "<h2>Cotizaciones</h2>";
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Membrete Superior</th>";
// Agrega más columnas según sea necesario
echo "</tr>";
echo "</thead>";
echo "<tbody>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['CotizacionID']}</td>";
    echo "<td>{$row['MembreteSuperior']}</td>";
    // Agrega más celdas según sea necesario
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

$conn->close();
?>


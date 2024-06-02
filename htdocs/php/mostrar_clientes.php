<?php
include 'db_connection.php';

// Realizar la consulta a la base de datos para obtener los clientes
$result = $conn->query("SELECT * FROM Clientes");

if ($result !== false && $result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>ClienteID</th>";
    echo "<th>Empresa</th>";
    echo "<th>Direccion</th>";
    echo "<th>CodigoPostal</th>";
    echo "<th>Ciudad</th>";
    echo "<th>Estado</th>";
    echo "<th>Usuario</th>";
    echo "<th>Nombre</th>";
    echo "<th>Puesto</th>";
    echo "<th>CorreoUsuario</th>";
    echo "<th>Telefono</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ClienteID"] . "</td>";
        echo "<td>" . $row["Empresa"] . "</td>";
        echo "<td>" . $row["Direccion"] . "</td>";
        echo "<td>" . $row["CodigoPostal"] . "</td>";
        echo "<td>" . $row["Ciudad"] . "</td>";
        echo "<td>" . $row["Estado"] . "</td>";
        echo "<td>" . $row["Usuario"] . "</td>";
        echo "<td>" . $row["Nombre"] . "</td>";
        echo "<td>" . $row["Puesto"] . "</td>";
        echo "<td>" . $row["CorreoUsuario"] . "</td>";
        echo "<td>" . $row["Telefono"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay datos en la tabla Clientes";
}

$conn->close();
?>



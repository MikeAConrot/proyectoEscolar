<!-- clientes_form.php -->
<form action="php/insertar_cliente.php" method="POST">
    <label for="empresa">Empresa:</label>
    <input type="text" id="empresa" name="empresa" required><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion"><br>

    <label for="codigo_postal">Código Postal:</label>
    <input type="text" id="codigo_postal" name="codigo_postal"><br>

    <label for="ciudad">Ciudad:</label>
    <input type="text" id="ciudad" name="ciudad"><br>

    <label for="estado">Estado:</label>
    <input type="text" id="estado" name="estado"><br>

    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario" required><br>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br>

    <label for="puesto">Puesto:</label>
    <input type="text" id="puesto" name="puesto"><br>

    <label for="correo_usuario">Correo del Usuario:</label>
    <input type="text" id="correo_usuario" name="correo_usuario"><br>

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono"><br>

    <button type="submit">Agregar Cliente</button>
</form>

<!-- productos_form.php -->
<form action="php/insertar_producto.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion"></textarea><br>

    <label for="precio">Precio Venta:</label>
    <input type="text" id="precio" name="precio" required><br>

    <label for="modificable">Modificable:</label>
    <select id="modificable" name="modificable">
        <option value="1">Sí</option>
        <option value="0">No</option>
    </select><br>

    <button type="submit">Agregar Producto</button>
</form>

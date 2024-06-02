<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="../js/clock.js" defer></script>
</head>

<body>
    <script>
        function openTab(tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tab-link");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            event.currentTarget.className += " active";
        }
    </script>
    <div class="tab-container">
        <div></div>
        <div id="clientes-tab" class="tab active-tab" onclick="openTab('clientes')">Clientes</div>
        <div id="productos-tab" class="tab" onclick="openTab('productos')">Productos</div>
        <div id="cotizaciones-tab" class="tab" onclick="openTab('cotizaciones')">Cotizaciones</div>
        <div></div>
        <form method="post" action="">
            <button style="background-color: #EC2300; border-color: #FFFFFF; border-width: 2px; border-style: solid;" type="submit" name="cerrar_sesion" onclick="return confirm('¿Estás seguro de cerrar sesión?')">Cerrar Sesión</button>
        </form>
        <div>
            <div id="clock-container">
                <div id="clock"></div>
            <div id="noteclock">HRS MIN SEC</div>
        </div>        
    </div>
    </div>

    <?php
    session_start();
    if (isset($_POST['cerrar_sesion'])) {
        session_destroy();
        header("Location: ../index.html");
        exit();
    }
    ?>

    <div id="clientes" class="tab-content active-content">
        <h2>Clientes</h2>
        <form action="insertar_cliente.php" method="POST">
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
        <input type="text" id="usuario" name="usuario"><br>

        <label for="nombre_usuario">Nombre:</label>
        <input type="text" id="nombre_usuario" name="nombre_usuario"><br>

        <label for="puesto">Puesto:</label>
        <input type="text" id="puesto" name="puesto"><br>

        <label for="correo_usuario">Correo del Usuario:</label>
        <input type="text" id="correo_usuario" name="correo_usuario"><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono"><br>

        <br>
        <button type="submit">Agregar Cliente</button>
        </form>
        <?php include 'mostrar_clientes.php'; ?>
    </div>

    <div id="productos" class="tab-content">
        <h2>Productos</h2>
        <form action="insertar_producto.php" method="POST">
        <label for="nombre_producto">Nombre:</label>
        <input type="text" id="nombre_producto" name="nombre_producto" required><br>

        <label for="descripcion_producto">Descripción:</label>
        <textarea id="descripcion_producto" name="descripcion_producto" required></textarea><br>

        <label for="precio_venta">Precio de Venta:</label>
        <input type="text" id="precio_venta" name="precio_venta" required><br>

        <label for="modificable">Modificable:</label>
        <input type="checkbox" id="modificable" name="modificable"><br>

        <br>
        <button type="submit">Agregar Producto</button>
        </form> 
        <?php include 'mostrar_productos.php'; ?>
    </div>

    <div id="cotizaciones" class="tab-content">
        <h2>Cotizaciones</h2>
        <form action="insertar_cotizacion.php" method="POST">
            <label for="membrete_superior">Membrete superior:</label>
            <input type="text" id="membrete_superior" name="membrete_superior" required><br>

            <!-- Agregar más campos según sea necesario para cotizaciones -->

            <br>
            <button type="submit">Crear Cotización</button>
        </form>
        <?php include 'mostrar_cotizaciones.php'; ?>
    </div>

</body>
</html> 
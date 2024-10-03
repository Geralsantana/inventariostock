<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Inventario de Productos Tecnológicos</title>
    <link rel="stylesheet" href="styles.css">
    <form action="guardar_producto.php" method="POST">
    <!-- Campos del formulario -->
</form>

</head>
<body>
    <header>
        <h1>Gestión de Inventario de Productos Tecnológicos</h1>
    </header>
    <main>
        <section id="form-container">
            <h2>Agregar Producto</h2>
            <form action="guardar_producto.php" method="POST">
                <label for="nombre">Nombre del Producto:</label>
                <input type="text" id="nombre" name="nombre" required>
                
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"></textarea>
                
                <label for="cantidad">Cantidad en Stock:</label>
                <input type="number" id="cantidad" name="cantidad" required>
                
                <label for="precio">Precio:</label>
                <input type="number" id="precio" step="0.01" id="precio" name="precio" required>
                
                <label for="proveedor">Proveedor:</label>
                <input type="text" id="proveedor" name="proveedor">
                
                <label for="persona_acargo">Persona a Cargo del Equipo:</label>
                <input type="text" id="persona_acargo" name="persona_acargo">
                
                <label for="fecha_ingreso">Fecha de Ingreso:</label>
                <input type="date" id="fecha_ingreso" name="fecha_ingreso">
                
                <label for="fecha_salida">Fecha de Salida:</label>
                <input type="date" id="fecha_salida" name="fecha_salida">
                
                <button type="submit">Guardar Producto</button>
            </form>
        </section>
        
        <section id="table-container">
            <h2>Listado de Productos</h2>
            <table id="product-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Proveedor</th>
                        <th>Persona a Cargo</th>
                        <th>Fecha de Ingreso</th>
                        <th>Fecha de Salida</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'listar_productos.php'; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>

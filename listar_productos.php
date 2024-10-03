<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventariostock";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener todos los productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

// Mostrar productos en la tabla
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['descripcion'] . "</td>";
        echo "<td>" . $row['cantidad'] . "</td>";
        echo "<td>" . $row['precio'] . "</td>";
        echo "<td>" . $row['proveedor'] . "</td>";
        echo "<td>" . $row['persona_acargo'] . "</td>";
        echo "<td>" . $row['fecha_ingreso'] . "</td>";
        echo "<td>" . $row['fecha_salida'] . "</td>";
        echo "<td><a href='editar_producto.php?id=" . $row['id'] . "'>Editar</a> | <a href='eliminar_producto.php?id=" . $row['id'] . "'>Eliminar</a></td>";
        echo "</tr>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>

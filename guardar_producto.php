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

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$proveedor = $_POST['proveedor'];
$persona_acargo = $_POST['persona_acargo'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$fecha_salida = $_POST['fecha_salida'];

// Insertar datos en la tabla productos
$sql = "INSERT INTO productos (nombre, descripcion, cantidad, precio, proveedor, persona_acargo, fecha_ingreso, fecha_salida)
        VALUES ('$nombre', '$descripcion', '$cantidad', '$precio', '$proveedor', '$persona_acargo', '$fecha_ingreso', '$fecha_salida')";

if ($conn->query($sql) === TRUE) {
    echo "Producto agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

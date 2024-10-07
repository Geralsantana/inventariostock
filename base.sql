CREATE DATABASE inventariostock;
use inventariostock;

CREATE TABLE productos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    cantidad INT NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    proveedor VARCHAR(100),
    persona_acargo VARCHAR(100),
    fecha_ingreso DATE NOT NULL,
    fecha_salida DATE
);

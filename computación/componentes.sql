-- Mostrar componentes
-- Mostrar Bases de datos existentes
SHOW DATABASES;
-- Mostrar las tablas de la bd
SHOW TABLES;




-- Crear una nueva base de datos
CREATE DATABASE sistema_ventas;

-- Seleccionar la bd que usaremos
USE sistema_ventas;

-- Crear nuestras tablas
CREATE TABLE usuarios(
    id INT PRIMARY KEY,
    usuario VARCHAR(255),
    contrasenia VARCHAR(255),
    email VARCHAR(255),
    rol VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE empleados(
    id INT PRIMARY KEY,
    nombre VARCHAR(255),
    apellido VARCHAR(255),
    fecha_nacimiento VARCHAR(255),
    telefono VARCHAR(255),
    direccion VARCHAR(255),
    usuario_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

-- Ver la estructura de la tabla seleccionada
DESC usuarios;

-- Borra los componentes de la BD
-- Borrar una tabla 
DROP TABLE empleados;
-- Borrar la base de datos completa
DROP DATABASE sistema_ventas;
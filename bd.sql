DROP DATABASE IF EXISTS licencias;
CREATE DATABASE IF NOT EXISTS licencias;
USE licencias;

CREATE TABLE licencia
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    numero VARCHAR(50),
    tipo VARCHAR(50),
    foto LONGBLOB,
    nombre VARCHAR(50),
    domicilio VARCHAR(50),
    fecha_alta DATE,
    fecha_vencimiento DATE,
    status VARCHAR(20)
);

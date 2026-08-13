CREATE DATABASE inventario_ifto;
USE inventario_ifto;

CREATE TABLE computadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(100) NOT NULL,
    modelo_cpu VARCHAR(100) NOT NULL,
    modelo_ram VARCHAR(100) NOT NULL,
    modelo_gabinete VARCHAR(100) NOT NULL,
    modelo_monitor VARCHAR(100) NOT NULL
);

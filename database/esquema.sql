CREATE DATABASE salon_fantasy;
USE salon_fantasy;

CREATE TABLE clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nombre_completo VARCHAR(150) NOT NULL,
    domicilio VARCHAR(255),
    codigo_postal VARCHAR(10),
    celular VARCHAR(20),
    correo_electronico VARCHAR(100),
    ine_numero VARCHAR(50)
);

CREATE TABLE contratos (
    id_contrato INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    fecha_contratacion DATETIME,
    tipo_evento VARCHAR(50),
    motivo_evento VARCHAR(50),
    nombre_festejado VARCHAR(100),
    fecha_evento DATE,
    horario_recepcion TIME,
    num_personas INT,
    paquete_no VARCHAR(20),
    color_manteleria VARCHAR(50),
    monto_total DECIMAL(10, 2),
    anticipo DECIMAL(10, 2),
    saldo_pendiente DECIMAL(10, 2),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);
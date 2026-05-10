<?php
require_once '../config/conexion.php';

class Cliente {
    public static function insertar($nombre, $domicilio, $cp, $celular, $correo, $ine) {
        $db = Conexion::conectar();
        $stmt = $db->prepare("INSERT INTO clientes (nombre_completo, domicilio, codigo_postal, celular, correo_electronico, ine_numero) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$nombre, $domicilio, $cp, $celular, $correo, $ine]);
        return $db->lastInsertId();
    }
}
?>
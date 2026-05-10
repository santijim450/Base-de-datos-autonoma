<?php
// Usamos dirname para que las rutas funcionen tanto desde index.php como desde los controllers
require_once dirname(__DIR__) . '/config/conexion.php';

class Contrato {
    public static function insertar($id_cliente, $tipo, $motivo, $festejado, $fecha, $recepcion, $personas, $paquete, $color, $total, $anticipo, $saldo) {
        $db = Conexion::conectar();
        $stmt = $db->prepare("INSERT INTO contratos (id_cliente, fecha_contratacion, tipo_evento, motivo_evento, nombre_festejado, fecha_evento, horario_recepcion, num_personas, paquete_no, color_manteleria, monto_total, anticipo, saldo_pendiente) VALUES (?, NOW(), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$id_cliente, $tipo, $motivo, $festejado, $fecha, $recepcion, $personas, $paquete, $color, $total, $anticipo, $saldo]);
        return $db->lastInsertId();
    }

    public static function obtenerTodos() {
        $db = Conexion::conectar();
        $stmt = $db->query("SELECT c.id_contrato, cli.nombre_completo, c.fecha_evento, c.tipo_evento, c.monto_total, c.anticipo, c.saldo_pendiente FROM contratos c INNER JOIN clientes cli ON c.id_cliente = cli.id_cliente ORDER BY c.fecha_evento ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
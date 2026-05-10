<?php
require_once '../models/Cliente.php';
require_once '../models/Contrato.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Guardar cliente y obtener su ID
    $id_cliente = Cliente::insertar(
        $_POST['nombre_cliente'], $_POST['domicilio'], $_POST['cp'], 
        $_POST['celular'], $_POST['correo'], $_POST['ine']
    );

    // 2. Calcular saldo y guardar contrato
    $saldo_pendiente = floatval($_POST['monto_total']) - floatval($_POST['anticipo']);
    
    $id_contrato = Contrato::insertar(
        $id_cliente, $_POST['tipo_evento'], $_POST['motivo_evento'], 
        $_POST['nombre_festejado'], $_POST['fecha_evento'], $_POST['horario_recepcion'], 
        $_POST['num_personas'], $_POST['paquete_no'], $_POST['color_manteleria'], 
        $_POST['monto_total'], $_POST['anticipo'], $saldo_pendiente
    );

    // 3. Redirigir al inicio con mensaje de éxito
    header("Location: ../index.php?mensaje=exito");
    exit();
}
?>
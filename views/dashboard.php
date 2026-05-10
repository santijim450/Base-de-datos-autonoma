<?php 
require_once 'models/Contrato.php'; 
$eventos = Contrato::obtenerTodos();
?>
<h2>Próximos Eventos</h2>
<?php if(isset($_GET['mensaje']) && $_GET['mensaje'] == 'exito'): ?>
    <div style="background: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border-radius: 4px;">
        Contrato generado y guardado exitosamente en la base de datos.
    </div>
<?php endif; ?>

<table>
    <tr>
        <th>Cliente</th>
        <th>Fecha Evento</th>
        <th>Tipo</th>
        <th>Total</th>
        <th>Saldo Pendiente</th>
        <th>Acciones</th>
    </tr>
    <?php foreach($eventos as $e): ?>
    <tr>
        <td><?= htmlspecialchars($e['nombre_completo']) ?></td>
        <td><?= $e['fecha_evento'] ?></td>
        <td><?= $e['tipo_evento'] ?></td>
        <td>$<?= number_format($e['monto_total'], 2) ?></td>
        <td style="color: <?= $e['saldo_pendiente'] > 0 ? '#dc3545' : '#28a745' ?>; font-weight: bold;">
            $<?= number_format($e['saldo_pendiente'], 2) ?>
        </td>
        <td>
            <a href="controllers/PdfController.php?id=<?= $e['id_contrato'] ?>" target="_blank" class="btn">🖨️ PDF</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
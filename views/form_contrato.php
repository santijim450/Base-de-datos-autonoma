<?php include 'layouts/header.php'; ?>
<h2>Captura de Nuevo Contrato</h2>
<form action="../controllers/ContratoController.php" method="POST">
    <fieldset style="margin-bottom: 15px;">
        <legend>Datos del Cliente</legend>
        Nombre: <input type="text" name="nombre_cliente" required style="width:100%; margin-bottom: 10px; padding: 5px;">
        Celular: <input type="text" name="celular" required style="width:100%; margin-bottom: 10px; padding: 5px;">
        Domicilio: <input type="text" name="domicilio" style="width:100%; margin-bottom: 10px; padding: 5px;">
        INE: <input type="text" name="ine" style="width:100%; padding: 5px;">
        <input type="hidden" name="cp" value="">
        <input type="hidden" name="correo" value="">
    </fieldset>

    <fieldset style="margin-bottom: 15px;">
        <legend>Datos del Evento</legend>
        Fecha: <input type="date" name="fecha_evento" required style="width:100%; margin-bottom: 10px; padding: 5px;">
        Tipo: <select name="tipo_evento" style="width:100%; margin-bottom: 10px; padding: 5px;"><option>Infantil</option><option>Social</option></select>
        Motivo: <input type="text" name="motivo_evento" style="width:100%; margin-bottom: 10px; padding: 5px;">
        Festejado: <input type="text" name="nombre_festejado" style="width:100%; margin-bottom: 10px; padding: 5px;">
        Personas: <input type="number" name="num_personas" style="width:100%; margin-bottom: 10px; padding: 5px;">
        Recepción (Hora): <input type="time" name="horario_recepcion" style="width:100%; margin-bottom: 10px; padding: 5px;">
        Paquete: <input type="text" name="paquete_no" style="width:100%; margin-bottom: 10px; padding: 5px;">
        Mantelería: <input type="text" name="color_manteleria" style="width:100%; margin-bottom: 10px; padding: 5px;">
    </fieldset>

    <fieldset style="margin-bottom: 15px;">
        <legend>Costos</legend>
        Monto Total $: <input type="number" step="0.01" name="monto_total" required style="width:100%; margin-bottom: 10px; padding: 5px;">
        Anticipo $: <input type="number" step="0.01" name="anticipo" required style="width:100%; margin-bottom: 10px; padding: 5px;">
    </fieldset>

    <button type="submit" class="btn" style="width: 100%; padding: 15px; font-size: 16px;">Guardar Contrato</button>
</form>
<?php include 'layouts/footer.php'; ?>
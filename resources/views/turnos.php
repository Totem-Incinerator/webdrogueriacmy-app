<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificación de Turno - Cauca</title>
    <link rel="stylesheet" href="turnos.css.css">
</head>
<body>

    <div class="form-container">
        <h2>Gestión de turnos</h2>
        <p class="subtitle">Confirma tu presencia en el punto de dispensación para activar tu turno.</p>

        <form id="llegadaForm">
            <div class="input-group">
                <label for="documento">Número de Documento</label>
                <input type="text" id="documento" placeholder="Ej: 1061..." required>
            </div>

            <div class="input-group">
                <label for="turno">Código de Turno</label>
                <input type="text" id="turno" placeholder="Ej: A-123" required>
            </div>

            <div class="input-group">
                <label for="sede">Punto de Dispensación (Cauca)</label>
                <select id="sede" required>
                    <option value="" disabled selected>Selecciona tu ubicación</option>
                    <option value="popayan-centro">Popayán - Centro</option>
                    <option value="santander-quilichao">Santander de Quilichao</option>
                    <option value="puerto-tejada">Puerto Tejada</option>
                </select>
            </div>

            <button type="submit" class="btn-notificar">Notifica tu llegada</button>
        </form>
    </div>

</body>
</html>
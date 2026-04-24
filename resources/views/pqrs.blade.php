<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PQRS - Droguería Cabildo Mayor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/pqr.css')}}">
    
</head>
<body> 
    
    <div class="pqrs-card">

        <div class="side-panel">
            <h1>PQRS</h1>
            <p><strong>Droguería Cabildo Mayor</strong> siempre disponible a nuestra comunidad.</p>
        </div>

        <div class="form-panel">
            <div class="form-header">
                <h2>Radicar Solicitud</h2>
                <p>Información básica y adjuntos</p>
            </div>

            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="row g-2">
                    <div class="col-12">
                        <select class="form-select custom-input" required>
                            <option value="" disabled selected>Tipo de PQRS</option>
                            <option value="peticion">Petición</option>
                            <option value="queja">Queja</option>
                            <option value="reclamo">Reclamo</option>
                            <option value="sugerencia">Sugerencia</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <input type="text" class="form-control custom-input" placeholder="Nombres" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control custom-input" placeholder="Apellidos" required>
                    </div>
                    
                    <div class="col-12">
                        <input type="email" class="form-control custom-input" placeholder="Correo electrónico" required>
                    </div>

                    <div class="col-12">
                        <textarea class="form-control custom-input" rows="4" placeholder="Escribe aquí tu mensaje..." required></textarea>
                    </div>

                    <div class="col-12">
                        <label class="file-label">Adjuntar soporte (Opcional)</label>
                        <input type="file" class="form-control custom-input">
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn-crear">Radicar PQRS</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
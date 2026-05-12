<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Puntos de Atención</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
   @include('templates.header')
  
</head>

<body>
 <div class="container-fluid py-5" style="background-color: #f0f7f4;">
    <div class="container shadow-lg bg-white rounded-4 p-4">
        
        <h2 class="text-center mb-4 fw-bold" style="color: #1a3a32;">
            Nuestros puntos de atención
        </h2>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="table-responsive rounded-3 border shadow-sm" style="max-height: 450px; overflow-y: auto;">
                    <table class="table table-hover align-middle mb-0" id="tabla-sedes">
                        <thead class="sticky-top" style="background-color: #1a3a32; color: white;">
                            <tr>
                                <th>SEDE</th>
                                <th>DIRECTOR</th>
                                <th>CELULAR</th>
                                <th>HORARIO</th>
                            </tr>
                        </thead>
                        <tbody style="cursor: pointer;">
                            <tr class="punto-fila active" data-img="img/logo.png" data-place="Calle 8 # 9-76, Popayan, Cauca">
                                <td class="fw-bold text-success">POPAYÁN PRINCIPAL</td>
                                <td>THAIRON GONZALES</td>
                                <td>3012654002</td>
                                <td>LUN-VIE (7AM-4PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/cauca.png" data-place="Carrera 9 # 10N-94, Popayan, Cauca">
                                <td class="fw-bold text-success">POPAYÁN DOS</td>
                                <td>NATHALY MAJIN</td>
                                <td>3012654002</td>
                                <td>LUN-VIE (7AM-4PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/san_sebastian.png" data-place="San Sebastian, Cauca, Colombia">
                                <td class="fw-bold text-success">SAN SEBASTIAN</td>
                                <td>LUCELLY ANACONA</td>
                                <td>3107589042</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/caquiona.png" data-place="Caquiona, Almaguer, Cauca">
                                <td class="fw-bold text-success">CAQUIONA</td>
                                <td>EDITH MORENO</td>
                                <td>3122420392</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/la_vega.png" data-place="La Vega, Cauca, Colombia">
                                <td class="fw-bold text-success">LA VEGA</td>
                                <td>YETZICA CASTILLO</td>
                                <td>3224139667</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/valencia.png" data-place="Valencia, San Sebastian, Cauca">
                                <td class="fw-bold text-success">VALENCIA</td>
                                <td>ORFELINA ANACONA</td>
                                <td>3224139667</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/rosas.png" data-place="Rosas, Cauca, Colombia">
                                <td class="fw-bold text-success">ROSAS</td>
                                <td>OVEIDA DIAZ PIAMBA</td>
                                <td>3224139667</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/guachicono.png" data-place="Guachicono, La Vega, Cauca">
                                <td class="fw-bold text-success">GUACHICONO</td>
                                <td>YACQUELINE CHICANGANA</td>
                                <td>3146590033</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/san_juan.png" data-place="San Juan, Bolivar, Cauca">
                                <td class="fw-bold text-success">SAN JUAN</td>
                                <td>YULIETH DIAZ</td>
                                <td>3122241716</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>

            <div class="col-lg-4 text-center">
                <div class="p-3 border rounded-4 bg-light shadow-sm h-100 d-flex flex-column align-items-center justify-content-center">
                    <h6 class="text-muted mb-3" style="font-style: italic;">Punto de Dispensación</h6>
                    <img id="mapa-visor" src="img/ubicacion.png" class="img-fluid rounded-3 shadow" style="transition: all 0.3s ease; max-height: 380px; object-fit: contain;">
                </div>
            </div>

        </div>

        <!-- MAPA -->
        <div class="mt-4">
            <div class="shadow-sm rounded-4 overflow-hidden border" style="height:450px;">
                <iframe id="google-maps-iframe"
                        width="100%" height="100%" style="border:0;"
                        src="https://maps.google.com/maps?q=Popayan&t=&z=13&output=embed">
                </iframe>
            </div>
        </div>

    </div>
</div>

{{-- 🔥 SCRIPT QUE HABÍAS PERDIDO --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filas = document.querySelectorAll('.punto-fila');
    const visorImg = document.getElementById('mapa-visor');
    const iframeMapa = document.getElementById('google-maps-iframe');

    filas.forEach(fila => {
        fila.addEventListener('click', function() {

            filas.forEach(f => f.classList.remove('active'));
            this.classList.add('active');

            const rutaImagen = this.getAttribute('data-img');
            visorImg.src = rutaImagen;

            const direccion = this.getAttribute('data-place');
            iframeMapa.src = `https://maps.google.com/maps?q=${encodeURIComponent(direccion)}&z=16&output=embed`;
        });
    });
});
</script>
<footer>
  @include('templates.footer')
</footer>

@endsection
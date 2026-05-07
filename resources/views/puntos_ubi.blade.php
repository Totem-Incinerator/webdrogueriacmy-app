<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Puntos de Atención</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/ubicacion.css') }}">
   @include('templates.header')
  
</head>

<body>
 <div class="container-fluid contenedor-custom shadow-lg bg-white rounded-4 p-4 px-5" style="background-color: #f0f7f4;">
    <div class="container-fluid shadow-lg bg-white rounded-4 p-4 px-5">
        
        <h2 class="text-center mb-4 fw-bold" style="color: #1a3a32; border-bottom: 3px solid #74c69d; display: inline-block; width: 100%; padding-bottom: 15px;">
            Nuestros puntos de atención
        </h2>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="table-responsive h-100 rounded-3 border shadow-sm" style="height: 600px; overflow-y: auto;">
                    <table class="table table-hover align-middle mb-0" id="tabla-sedes">
                        <thead class="sticky-top" style="background-color: #1a3a32; color: white;">
                            <tr>
                                <th>SEDE</th>
                                <th>DIRECTOR TÉCNICO</th>
                                <th>CELULAR</th>
                                <th>HORARIO</th>
                            </tr>
                        </thead>
                        <tbody style="cursor: pointer;">
                            <tr class="punto-fila active" data-img="img/popayan1.jpg" data-place="Calle 8 # 9-76, Popayan, Cauca">
                                <td class="fw-bold text-success">POPAYÁN PRINCIPAL</td>
                                <td>THAIRON GONZALES</td>
                                <td>3012654002</td>
                                <td>LUN-VIE (7AM-4PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/popayan2.jpg" data-place="Carrera 9 # 10N-94, Popayan, Cauca">
                                <td class="fw-bold text-success">POPAYÁN SEDE NORTE</td>
                                <td>NATHALY MAJIN</td>
                                <td>3012654002</td>
                                <td>LUN-VIE (7AM-4PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/san_sebastian.jpg" data-place="San Sebastian, Cauca, Colombia">
                                <td class="fw-bold text-success">SAN SEBASTIAN</td>
                                <td>LUCELLY ANACONA</td>
                                <td>3107589042</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/caquiona.jpg" data-place="Caquiona, Almaguer, Cauca">
                                <td class="fw-bold text-success">CAQUIONA</td>
                                <td>EDITH MORENO</td>
                                <td>3122420392</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/vega.jpg" data-place="La Vega, Cauca, Colombia">
                                <td class="fw-bold text-success">LA VEGA</td>
                                <td>YETZICA CASTILLO</td>
                                <td>3224139667</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/valencia.jpg" data-place="Valencia, San Sebastian, Cauca">
                                <td class="fw-bold text-success">VALENCIA</td>
                                <td>ORFELINA ANACONA</td>
                                <td>3224139667</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/ROSAS.jpg" data-place="Rosas, Cauca, Colombia">
                                <td class="fw-bold text-success">ROSAS</td>
                                <td>OVEIDA DIAZ PIAMBA</td>
                                <td>3224139667</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/guachicono.jpg" data-place="Guachicono, La Vega, Cauca">
                                <td class="fw-bold text-success">GUACHICONO</td>
                                <td>YACQUELINE CHICANGANA</td>
                                <td>3146590033</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/san_juan.jpg" data-place="San Juan, Bolivar, Cauca" >
                                <td class="fw-bold text-success">SAN JUAN</td>
                                <td>YULIETH DIAZ PUJIMUY</td>
                                <td>3122241716</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-6 text-center">
                <div class="p-0 border rounded-4 bg-light shadow-sm h-100 d-flex flex-column align-items-center justify-content-center">
                    <img id="mapa-visor" src="img/mapa_sedes.png" class="img-fluid rounded-3 shadow w-100" style="transition: all 0.3s ease; height: 500px; object-fit: contain;">
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="shadow-sm rounded-4 overflow-hidden border" style="height: 450px;">
                    <iframe 
                        id="google-maps-iframe"
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        src="https://maps.google.com/maps?q=Calle%208%20%23%209-76,%20Popayan&t=&z=16&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    /* Estilos de interactividad */
    .punto-fila.active {
        background-color: #d8f3dc !important;
        border-left: 6px solid #1a3a32 !important;
    }
    .punto-fila:hover:not(.active) {
        background-color: #f1f8f5 !important;
    }
    /* Scrollbar personalizado para la tabla */
    .table-responsive::-webkit-scrollbar { width: 8px; }
    .table-responsive::-webkit-scrollbar-thumb { background: #1a3a32; border-radius: 10px; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filas = document.querySelectorAll('.punto-fila');
    const visorImg = document.getElementById('mapa-visor');
    const iframeMapa = document.getElementById('google-maps-iframe');

    filas.forEach(fila => {
        fila.addEventListener('click', function() {
            // 1. Cambiar estado visual de la fila
            filas.forEach(f => f.classList.remove('active'));
            this.classList.add('active');

            // 2. Cambiar la imagen del visor (Derecha)
            const rutaImagen = this.getAttribute('data-img');
            visorImg.style.opacity = '0.3';
            setTimeout(() => {
                visorImg.src = rutaImagen;
                visorImg.style.opacity = '1';
            }, 200);

            // 3. Cambiar el mapa de Google (Inferior)
            const direccion = this.getAttribute('data-place');
            // Formato de URL para Iframe de Google Maps sin API Key
            const nuevaUrl = `https://maps.google.com/maps?q=${encodeURIComponent(direccion)}&t=&z=16&ie=UTF8&iwloc=&output=embed`;
            
            iframeMapa.src = nuevaUrl;
        });
    });
});
</script>
<footer>
  @include('templates.footer')
</footer>

</body>
</html>
@extends("layouts.app")

@section("title", "Nuestras Sedes | DCMY")

@push("styles")
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"> --}}
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
        .table-responsive::-webkit-scrollbar { 
            width: 8px; }
        .table-responsive::-webkit-scrollbar-thumb { 
            background: #1a3a32; border-radius: 10px; 
        }
    </style>
@endpush

@section("content")
<div class="container-fluid py-5" style="background-color: #f0f7f4;">
    <div class="container shadow-lg bg-white rounded-4 p-4">
        
        <h2 class="text-center mb-4 fw-bold" style="color: #1a3a32; border-bottom: 3px solid #74c69d; display: inline-block; width: 100%; padding-bottom: 15px;">
            Nuestros puntos de atención
        </h2>

        <div class="row g-4">
            <div class="col-lg-8">
                <div class="table-responsive rounded-3 border shadow-sm" style="max-height: 450px; overflow-y: auto;">
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
                            <tr class="punto-fila active" data-img="img/popayan1.png" data-place="Calle 8 # 9-76, Popayan, Cauca">
                                <td class="fw-bold text-success">POPAYÁN PRINCIPAL</td>
                                <td>THAIRON GONZALES</td>
                                <td>3012654002</td>
                                <td>LUN-VIE (7AM-4PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/popayan2.png" data-place="Carrera 9 # 10N-94, Popayan, Cauca">
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
                            <tr class="punto-fila" data-img="img/vega.png" data-place="La Vega, Cauca, Colombia">
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
                            <tr class="punto-fila" data-img="img/san_juan.png" data-place="San Juan, Bolivar, Cauca" >
                                <td class="fw-bold text-success">SAN JUAN</td>
                                <td>YULIETH DIAZ PUJIMUY</td>
                                <td>3122241716</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-4 text-center">
                <div class="p-3 border rounded-4 bg-light shadow-sm h-100 d-flex flex-column align-items-center justify-content-center">
                    <img id="mapa-visor" src="img/ubicacion.png" class="img-fluid rounded-3 shadow" style="transition: all 0.3s ease; max-height: 380px; object-fit: contain;">
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
@endsection

@push("scripts")
    <script src="{{ asset("js/pages/sedes.js") }}"></script>
@endpush
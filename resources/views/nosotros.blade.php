@extends('layouts.app')

@section('title', 'Sobre Nosotros')

@section('content')

<link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">

<section class="valores-section">
    <div class="container">
        
        <h1 class="titulo">VALORES</h1>
        <h3 class="subtitulo">INSTITUCIONALES</h3>

        <div class="valores-grid">

            <div class="card">
                <img src="{{ asset('img/orden.png') }}" class="img-orden">
                <h4>Respeto y Valoración Cultural</h4>
                <p>Reconocemos y honramos la diversidad de usos y costumbres de la comunidad indígena y demás afiliados, adaptando nuestros servicios a sus particularidades.</p>
            </div>

            <div class="card">
                <i class="fas fa-hands-helping icono"></i>
                <h4>Compromiso Social</h4>
                <p>Estamos dedicados al bienestar de la comunidad, ofreciendo un servicio accesible, equitativo y sensible a sus necesidades de salud.</p>
            </div>

            <div class="card">
                <i class="fas fa-user-md icono"></i>
                <h4>Calidad y Profesionalismo</h4>
                <p>Cumplimos con los más altos estándares de calidad en nuestros servicios, operando dentro del marco legal colombiano con un equipo ético.</p>
            </div>

            <div class="card">
                <i class="fas fa-heart icono"></i>
                <h4>Calidez Humana</h4>
                <p>Brindamos una atención cercana, amable y empática, generando confianza y respeto con nuestros usuarios.</p>
            </div>

            <div class="card">
                <i class="fas fa-shield-alt icono"></i>
                <h4>Integridad</h4>
                <p>Actuamos con honestidad, transparencia y responsabilidad en todas nuestras operaciones y relaciones.</p>
            </div>

            <div class="card">
                <i class="fas fa-comments icono"></i>
                <h4>Comunicación</h4>
                <p>Valoramos sus opiniones y sugerencias para la mejora continua.</p>
            </div>

        </div>

    </div>
</section>

<!-- 🔥 POLÍTICAS EN TEXTO (COMO LO TENÍAS) -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">

        <div class="text-center mb-4">
            <h2 class="fw-bold" style="color:#1a3a32;">Políticas de Calidad</h2>
        </div>

        <div class="card shadow-sm p-4 rounded-4">

            <p style="text-align: justify;">
                En <strong>DROGUERÍA CABILDO MAYOR YANACONAS</strong> nos comprometemos con la distribución,
                dispensación y comercialización de medicamentos, dispositivos médicos e insumos farmacéuticos,
                garantizando la calidad, seguridad y trazabilidad de los productos que ofrecemos.
            </p>

            <p style="text-align: justify;">
                Nuestro enfoque está orientado a satisfacer las necesidades de la comunidad, brindando un servicio
                oportuno, eficiente y humanizado, respaldado por talento humano competente y capacitado
                continuamente.
            </p>

            <p style="text-align: justify;">
                Cumplimos con la normatividad vigente establecida por entidades como el INVIMA,
                la Superintendencia Nacional de Salud y el Ministerio de Salud y Protección Social,
                asegurando procesos seguros y confiables.
            </p>

            <p style="text-align: justify;">
                Trabajamos bajo un enfoque de mejoramiento continuo, fortaleciendo nuestros procesos,
                infraestructura y atención al usuario, con el fin de garantizar la satisfacción
                y confianza de nuestros afiliados.
            </p>

            <p style="text-align: justify;">
                Reafirmamos nuestro compromiso con la calidad, la transparencia y la responsabilidad social,
                contribuyendo al bienestar y desarrollo del sistema de salud en el departamento del Cauca.
            </p>

        </div>

    </div>
</section>

@endsection
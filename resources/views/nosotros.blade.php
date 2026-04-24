<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sobre nosotros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ICONOS (Font Awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/css/nosotros.css')}}">
    @include('templates.header')
</head>

<body>
<style>

</style>

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
 <section>
    <h1> politicas de calidad</h1>
    <p> En DROGUERÍA CABILDO MAYOR YANACONAS nos comprometemos con la distribución, dispensación y comercialización de medicamentos, dispositivos médicos e insumos, garantizando la calidad, seguridad y trazabilidad de nuestros productos en el departamento del Cauca.

    Nuestra gestión se orienta al cumplimiento de los objetivos organizacionales mediante la capacitación continua de nuestro talento humano, la adecuada administración, control y ejecución de los procesos, y la implementación de la normatividad vigente exigida por las autoridades competentes, tales como la Secretaría de Salud, INVIMA, SUPERSALUD y el Ministerio de Salud y Protección Social.

    Asimismo, promovemos el mejoramiento continuo de nuestros procesos y el fortalecimiento de nuestras instalaciones físicas en cada punto de dispensación, con el fin de asegurar un servicio oportuno, seguro y confiable para nuestros comuneros.
    En DROGUERÍA CABILDO MAYOR YANACONAS reafirmamos nuestro compromiso con la calidad, la transparencia y la confianza, contribuyendo al fortalecimiento del sistema de salud en el departamento del Cauca.
</p>
 </section>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<title>Slider Moderno</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="{{ asset('css/inici.css') }}">

@include('templates.header')
</head>

<body>

<div class="swiper mySlider">
    <div class="swiper-wrapper">

        <div class="swiper-slide">
            <div class="titulo">Drogueria Cabildo Mayor</div>
            <div class="imagen">
                <img src="{{ asset('img/2.png') }}">
            </div>
        </div>

        <div class="swiper-slide">
            <div class="titulo">Mision</div>
            <div class="imagen">
                <img src="{{ asset('img/dmcy.jpg') }}">
            </div>
        </div>

        <div class="swiper-slide">
            <div class="titulo">Vision</div>
            <div class="imagen">
                <img src="{{ asset('img/yacha.jpeg') }}">
            </div>
        </div>

    </div>

    <div class="menu">
        <div class="item activo">Mision</div>
        <div class="item">Vision</div>
        <div class="item">Nuestros canales</div>
    </div>
</div>

<div class="container py-5">

<div class="text-center mb-5">
  <h1 class="header-title">
    Droguería Cabildo, <span>más comprometida con tu bienestar</span>
  </h1>
  <p class="mt-3">
    Recuerda: puedes reclamar tus medicamentos en el punto de dispensación más cercano.
  </p>
  <p>sigue los siguiente pasos:</p>
</div>

<div class="container">
  <div class="row text-center">

    <div class="col-md-4">
      <div class="step-card">
        <div class="step-number">1</div>
        <div class="step-icon">
         <img src="{{ asset('img/orden.png') }}" class="img-orden">
        </div>
        <h5>Lleva tu orden médica</h5>
        <p>Presenta tu orden médica vigente y documento de identidad.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="step-card">
        <div class="step-number" style="background:#0288d1;">2</div>
        <div class="step-icon">
         <img src="{{ asset('img/map.png') }}" class="img-map">
        </div>
        <h5>Acércate al punto más cercano</h5>
        <p>Dirígete al punto de dispensación.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="step-card">
        <div class="step-number">3</div>
        <div class="step-icon">
         <img src="{{ asset('img/medica.png') }}" class="img-medica">
        </div>
        <h5>Reclama tu medicamento</h5>
        <p>Entrega los documentos y recibe tus medicamentos.</p>
      </div>
    </div>

  </div>
</div>

<div class="info-section mt-5">
    <div class="row">

      <div class="col-md-4 info-box">
        <div class="info-icon"><i class="fas fa-shield-alt"></i></div>
        <h6>Comprometidos contigo</h6>
        <p>Te acompañamos en cada paso de tu salud.</p>
      </div>

      <div class="col-md-4 info-box">
        <div class="info-icon"><i class="fas fa-hand-holding-heart"></i></div>
        <h6>Cercanos y confiables</h6>
        <p>Puntos de dispensación más cerca de ti.</p>
      </div>

      <div class="col-md-4 info-box">
        <div class="info-icon"><i class="fas fa-users"></i></div>
        <h6>Tu bienestar es primero</h6>
        <p>Medicamentos seguros y atención de calidad.</p>
      </div>

    </div>
</div>

<section class="services">

    <div class="header">
        <h1>Nuestros <span>servicios</span></h1>
        <p>Conoce todos los servicios que tenemos para ti.</p>
    </div>

    <div class="grid">

        <div class="card">
            <div class="icon green"><i class="fas fa-map-marker-alt"></i></div>
            <h3>Nuestras sedes</h3>
            <p>Contamos con 12 puntos de dispensación en el Cauca.</p>
            <a href="{{ route('sedes.ubicacion') }}">
                <button class="btn green">Ver ubicaciones</button>
            </a>
        </div>

        <div class="card">
            <div class="icon blue"><i class="fas fa-headset"></i></div>
            <h3>Radica tu PQRS</h3>
            <p>Gestiona tus peticiones fácilmente.</p>
            <a href="{{ route('pqrs.index') }}">
                <button class="btn blue">Radicar PQRS</button>
            </a>
        </div>

        <div class="card">
            <div class="icon yellow"><i class="fas fa-calendar-check"></i></div>
            <h3>Reservacion de turnos</h3>
            <p>Reserva tu atención.</p>
            <button class="btn yellow">Solicitar turno</button>
        </div>

        <div class="card">
            <div class="icon green"><i class="fab fa-whatsapp"></i></div>
            <h3>Medicamentos pendientes</h3>
            <p>Consulta por WhatsApp.</p>
            <a href="https://wa.me/573207896481?text=Hola">
                <button class="btn green">Enviar mensaje</button>
            </a>
        </div>

    </div>
</section>

<!-- NOTICIAS -->
<section class="seccion-recalcada-final">

<h2 class="titulo-seccion">Noticias importantes.</h2>

<div class="visor-carrusel">
    <div class="contenedor-diapositivas" id="tiraImagenes">
        <div class="slide-pro-horizontal">
            <img src="{{ asset('img/yacha.jpeg') }}">
        </div>
        <div class="slide-pro-horizontal">
            <img src="{{ asset('img/2.png') }}">
        </div>
        <div class="slide-pro-horizontal">
            <img src="{{ asset('img/dmcy.jpg') }}">
        </div>
    </div>
</div>

</section>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".mySlider",{
    direction: "vertical",
    loop:true,
    autoplay:{ delay:4000 },
    speed:900
});

const items = document.querySelectorAll(".item");

swiper.on("slideChange",function(){
    items.forEach(el=>el.classList.remove("activo"));
    let index = swiper.realIndex;
    items[index].classList.add("activo");
});
</script>

<script>
(function() {
    const tira = document.getElementById('tiraImagenes');
    const slides = document.querySelectorAll('.slide-pro-horizontal');
    let totalImagenes = slides.length;
    let actual = 0;

    function moverCarrusel() {
        actual++;
        if (actual >= totalImagenes) actual = 0;
        let desplazamiento = actual * -100 / totalImagenes;
        tira.style.transform = `translateX(${desplazamiento}%)`;
    }

    setInterval(moverCarrusel, 5000); 
})();
</script>

<footer>
    @include('templates.footer')
</footer>

</body>
</html>
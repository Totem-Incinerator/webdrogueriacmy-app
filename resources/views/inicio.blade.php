<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <title>Slider Moderno</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{{ asset('css/inici.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
 
</head>

<body>
  @include('templates.header')

  <div class="swiper mySlider">

    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide">
        <div class="titulo">Drogueria Cabildo Mayor</div>
        <div class="imagen">
          <img src="{{ asset('img/equipo.jpeg') }}">
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="swiper-slide">
        <div class="titulo">Misión</div>
        <div class="imagen">
          <img src="{{ asset('img/MISION.png') }}">
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide">
        <div class="titulo">Visión</div>
        <div class="imagen">
          <img src="{{ asset('img/vision.jpeg') }}">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="titulo">Nuestros Canales de Atención</div>
        <div class="imagen">
          <img src="{{ asset('img/contactos.png') }}">
        </div>
      </div>

    </div>
    <!-- MENU VERTICAL -->
    <div class="menu">
      <div class="item activo">Drogueria Cabildo Mayor</div>
      <div class="item">Mision</div>
      <div class="item">Visión</div>
      <div class="item">Nuestros canales</div>
    </div>
  </div>


  <!-- seccion de informacion pasos -->


  <div class="container py-12">

    <!-- HEADER -->
    <div class="text-center mb-5">
      <h1 class="header-title">
        Droguería Cabildo, <span>más comprometida con tu bienestar</span>
      </h1>
      <p class="mt-3">
        Recuerda: puedes reclamar tus medicamentos en el punto de dispensación más cercano.
      </p>
      <p> sigue los siguiente pasos:</p>
    </div>




    <!-- Paso 1 -->
    <div class="container">
      <div class="row text-center">

        <!-- Paso 1 -->
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

        <!-- Paso 2 -->
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

        <!-- Paso 3 -->
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
    <!-- INFO -->
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

    <!--========================================================== -->
    <!--  servicios -->
    <!--========================================================== -->


    <section class="services">

      <div class="header">
        <h1>Nuestros <span>servicios</span></h1>
        <p>Conoce todos los servicios que tenemos para ti.</p>
      </div>

      <div class="grid">

        <!-- CARD 1 -->
        <div class="card">
          <div class="icon green">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3>Nuestras sedes</h3>
          <p>Contamos con 12 puntos de dispensación en el Cauca.</p>
          <a href="{{ route('sedes.ubicacion') }}">
            <button class="btn green">Ver ubicaciones</button>

          </a>
        </div>

        <!-- CARD 2 -->
        <div class="card">
          <div class="icon blue">
            <i class="fas fa-headset"></i>
          </div>
          <h3>Radica tu PQRS</h3>
          <p>Gestiona tus peticiones, quejas y reclamos fácilmente.</p>
          <a href="{{ route('pqrs.index') }}">
            <button class="btn blue">Radicar PQRS</button>
          </a>
        </div>

        <!-- CARD 3 -->
        <div class="card">
          <div class="icon yellow">
            <i class="fas fa-calendar-check"></i>
          </div>
          <h3>Reservacion de turnos</h3>
          <p>reserva tu atención en el punto de dispensación.</p>
          <button class="btn yellow">Solicitar turno</button>
        </div>

        <!-- CARD 4 -->
        <div class="card">
          <div class="icon green">
            <i class="fab fa-whatsapp"></i>
          </div>
          <h3>Medicamentos pendientes</h3>
          <p>Consulta tu pentiente y estado por WhatsApp.</p>
          <a
            href="https://wa.me/573207896481?text=Hola,%20deseo%20consultar%20el%20estado%20de%20mi%20medicamento%20pendiente">
            <button class="btn green">Enviar mensaje</button>
          </a>
        </div>

      </div>

      <!-- FOOTER INFO -->
      <div class="info">
        <div>
          <i class="fas fa-shield-alt"></i>
          <p>Comprometidos con tu salud</p>
        </div>
        <div>
          <i class="fas fa-map"></i>
          <p>12+ puntos en el Cauca</p>
        </div>
        <div>
          <i class="fas fa-bolt"></i>
          <p>Atención rápida</p>
        </div>
        <div>
          <i class="fas fa-heart"></i>
          <p>Tu bienestar es primero</p>
        </div>
      </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>

      var swiper = new Swiper(".mySlider", {
        direction: "vertical",
        loop: true,
        autoplay: {
          delay: 4000
        },

        speed: 900

      });

      const items = document.querySelectorAll(".item");

      swiper.on("slideChange", function () {

        items.forEach(el => el.classList.remove("activo"));

        let index = swiper.realIndex;

        items[index].classList.add("activo");

      });

    </script>



    <section class="seccion-recalcada-final">

      <h2 class="titulo-seccion">Noticias importantes.</h2>

      <div class="visor-carrusel">
        <div class="contenedor-diapositivas" id="tiraImagenes">
            <div class="slide-pro-horizontal">
              <img src="{{ asset('img/equipo.jpeg') }}" alt="">
            </div>
            <div class="slide-pro-horizontal">
              <img src="{{ asset('img/equipo.jpeg') }}" alt="">
            </div>
            <div class="slide-pro-horizontal">
              <img src="{{ asset('img/info_pacientes.png') }}" alt="">
            </div>
            <div class="slide-pro-horizontal">
              <img src="{{ asset('img/info_pacientes.png') }}" alt="">
            </div>
        </div>
      </div>
      <script>
        (function () {
          const tira = document.getElementById('tiraImagenes');
          const slides = document.querySelectorAll('.slide-pro-horizontal');
          let totalImagenes = slides.length;
          let actual = 0;

          function moverCarrusel() {
            actual++;

            // Si llegamos al final, volvemos a la primera
            if (actual >= totalImagenes) {
              actual = 0;
            }

            // La Magia: Movemos la tira horizontalmente basándonos en el índice
            // Si actual es 1, movemos -33.33%, si es 2, movemos -66.66%
            let desplazamiento = actual * -100;
            tira.style.transform = `translateX(${desplazamiento}%)`;
          }

          // Cambia cada 5 segundos (5000ms)
          setInterval(moverCarrusel, 4000);
        })();
      </script>
    
    </section>                     
  </div>

  @include('templates.footer')

  
</body>

</html>
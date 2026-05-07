<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Corporativa – Droguería Cabildo Mayor Yanaconas</title>

    <!-- Bootstrap 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Source+Sans+3:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --verde-oscuro:   #1a5c2a;
            --verde-medio:    #2d7a3e;
            --verde-claro:    #4a9e5c;
            --verde-suave:    #e8f4ea;
            --verde-borde:    #c5dfc9;
            --dorado:         #b8960c;
            --dorado-claro:   #f0d060;
            --crema:          #fdf9f0;
            --texto-oscuro:   #1c2b1e;
            --texto-medio:    #3d4f40;
            --blanco:         #ffffff;
        }

        body {
            font-family: 'Source Sans 3', sans-serif;
            background-color: var(--crema);
            color: var(--texto-oscuro);
        }

        /* ── HERO ── */
        .hero-section {
            background-image: url('{{ asset('img/FOTO GRUPO DE TRABAJO.jpeg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            /* background: red; */
            padding: 72px 0 56px;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(
                to right,
                rgba(10, 40, 15, 0.85) 0%,    /* oscuro izquierda donde está el texto */
                rgba(10, 40, 15, 0.55) 45%,   /* transición suave al centro */
                rgba(10, 40, 15, 0.10) 100%   /* casi transparente a la derecha */
            );
            z-index: 0;
        }

        .hero-section .badge-tag {
            display: inline-block;
            background: rgba(255,255,255,.15);
            border: 1px solid rgba(255,255,255,.3);
            color: var(--dorado-claro);
            font-size: .90rem;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: 5px 14px;
            border-radius: 50px;
            margin-bottom: 18px;
        }
        .hero-section h1 {
            font-family: 'Playfair Display', serif;
            color: var(--crema);
            font-size: clamp(1.9rem, 4vw, 2.8rem);
            line-height: 1.2;
            
        }
        .hero-section h1 span {
            color: var(--dorado-claro);
        }
        .hero-section p.lead {
            color: rgba(255,255,255,.82);
            font-size: 1.4rem;
            font-weight: 300;
            max-width: 560px;
            text-align: justify;
            
        }
        .hero-divider {
            width: 56px;
            height: 3px;
            background: var(--dorado);
            border-radius: 2px;
            margin: 20px 0;
        }

        /* ── NAV PILLS ── */
        .nav-tabs-custom {
            background: var(--blanco);
            border-bottom: 2px solid var(--verde-borde);
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 12px rgba(0,0,0,.07);
        }
        .nav-tabs-custom .nav-link {
            color: var(--texto-medio);
            font-weight: 500;
            font-size: 1.1rem;
            padding: 14px 22px;
            border: none;
            border-bottom: 3px solid transparent;
            border-radius: 0;
            transition: all .25s ease;
        }
        .nav-tabs-custom .nav-link:hover {
            color: var(#fff);
            background: var(--verde-oscuro);
        }
        .nav-tabs-custom .nav-link.active {
            color: var(--verde-oscuro);
            font-weight: 600;
            border-bottom: 3px solid var(--verde-oscuro);
            background: transparent;
        }
        .nav-tabs-custom .nav-link i {
            font-size: 1rem;
            margin-right: 6px;
        }

        /* ── SECTION WRAPPERS ── */
        .content-section { padding: 64px 0; }
        .content-section:nth-child(even) { background: var(--blanco); }

        .section-eyebrow {
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: .15em;
            text-transform: uppercase;
            /* color: var(--dorado); */
            color: #0b0b2a;
        }
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(1.5rem, 3vw, 2rem);
            color: var(--verde-oscuro);
            margin-bottom: 8px;
        }
        .section-line {
            width: 44px;
            height: 3px;
            background: var(--verde-claro);
            border-radius: 2px;
            margin-bottom: 32px;
        }

        /* ── VALOR CARD ── */
        .valor-card {
            background: var(--blanco);
            border: 1px solid var(--verde-borde);
            border-radius: 14px;
            padding: 28px 26px;
            height: 100%;
            transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
            position: relative;
            overflow: hidden;
        }
        .valor-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--verde-oscuro), var(--verde-claro));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .3s ease;
        }
        .valor-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(26,92,42,.12);
            border-color: var(--verde-claro);
        }
        .valor-card:hover::before { transform: scaleX(1); }
        .valor-card .icon-wrap {
            width: 48px; height: 48px;
            background: var(--verde-suave);
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.4rem;
            color: var(--verde-oscuro);
            margin-bottom: 16px;
        }
        .valor-card h5 {
            font-weight: 600;
            font-size: 1.2rem;
            color: var(--verde-oscuro);
            margin-bottom: 8px;
        }
        .valor-card p {
            font-size: 1.1rem;
            color: var(--texto-medio);
            line-height: 1.6;
            margin: 0;
        }

        /* .img-anime-1{
            background-image: url('{{ asset('img/IMAGEN_NOSOTROS_1.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        } */

        .img-anime-1{
            background-image: url('{{ asset('img/equipo.jpeg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .img-anime-2{
            background-image: url('{{ asset('img/niño.jpeg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .img-anime-3{
            background-image: url('{{ asset('img/IMAGEN_NOSOTROS_1.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* .img-anime{
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        } */

        /* ── DERECHOS / DEBERES ── */
        .dd-panel {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0,0,0,.08);
        }
        .dd-panel-header {
            padding: 24px 28px;
            display: flex; align-items: center; gap: 14px;
        }
        .dd-panel-header.derechos { background: var(--verde-oscuro); }
        .dd-panel-header.deberes  { background: #5c7a3e; }
        .dd-panel-header .header-icon {
            width: 44px; height: 44px;
            background: rgba(255,255,255,.15);
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.4rem;
            color: var(--blanco);
            flex-shrink: 0;
        }
        .dd-panel-header h3 {
            font-family: 'Playfair Display', serif;
            color: var(--blanco);
            font-size: 1.25rem;
            margin: 0;
        }
        .dd-panel-header small {
            color: rgba(255,255,255,.65);
            font-size: 1.2rem;
        }
        .dd-list {
            background: var(--blanco);
            padding: 0;
            margin: 0;
            list-style: none;
        }
        .dd-list li {
            padding: 18px 28px;
            border-bottom: 1px solid #f0f4f1;
            display: flex; align-items: flex-start; gap: 14px;
            transition: background .2s;
        }
        .dd-list li:last-child { border-bottom: none; }
        .dd-list li:hover { background: var(--verde-suave); }
        .dd-list li .bullet {
            width: 28px; height: 28px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: .8rem;
            flex-shrink: 0;
            margin-top: 2px;
        }
        .derechos-bullet { background: #d4edda; color: var(--verde-oscuro); }
        .deberes-bullet  { background: #dde8d4; color: #3d5c1e; }
        .dd-list li .item-content strong {
            display: block;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--verde-oscuro);
            margin-bottom: 3px;
        }
        .dd-list li .item-content span {
            font-size: .875rem;
            color: var(--texto-medio);
            line-height: 1.5;
        }

        /* ── ENFOQUE INTERCULTURAL ── */
        .enfoque-highlight {
            background: linear-gradient(135deg, var(--verde-oscuro) 0%, #2d5a1e 100%);
            border-radius: 20px;
            padding: 48px 40px;
            color: var(--blanco);
            position: relative;
            overflow: hidden;
        }
        .enfoque-highlight::after {
            content: '';
            position: absolute;
            right: -40px; bottom: -40px;
            width: 200px; height: 200px;
            border-radius: 50%;
            background: rgba(255,255,255,.04);
        }
        .enfoque-highlight blockquote {
            font-family: 'Playfair Display', serif;
            font-size: clamp(1.1rem, 2.5vw, 1.4rem);
            font-style: italic;
            color: var(--dorado-claro);
            border-left: 4px solid var(--dorado);
            padding-left: 20px;
            margin: 0;
            line-height: 1.6;
        }
        .enfoque-marco-item {
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 10px;
            padding: 14px 18px;
            display: flex; align-items: center; gap: 12px;
            margin-bottom: 10px;
            transition: background .2s;
        }
        .enfoque-marco-item:hover { background: rgba(255,255,255,.13); }
        .enfoque-marco-item i { color: var(--dorado-claro); font-size: 1rem; flex-shrink: 0; }
        .enfoque-marco-item span { font-size: .88rem; color: rgba(255,255,255,.88); line-height: 1.4; }

        .pilar-badge {
            background: rgba(255,255,255,.1);
            border: 1px solid rgba(255,255,255,.2);
            color: var(--blanco);
            border-radius: 50px;
            padding: 8px 18px;
            font-size: 1.1rem;
            font-weight: 500;
            display: inline-flex; align-items: center; gap: 6px;
            margin: 4px;
        }

        /* ── POLÍTICA DE CALIDAD ── */
        .calidad-card {
            background: var(--blanco);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0,0,0,.07);
        }
        .calidad-card-header {
            background: linear-gradient(90deg, var(--verde-oscuro), var(--verde-medio));
            padding: 28px 32px;
        }
        .calidad-card-header h3 {
            font-family: 'Playfair Display', serif;
            color: var(--blanco);
            font-size: 1.8rem;
            margin: 0;
        }
        .calidad-card-header small { color: rgba(255,255,255,.65); font-size: .8rem; }
        .calidad-body { padding: 32px; }
        .calidad-body p {
            font-size: 1.8 rem;
            line-height: 1.8;
            color: var(--texto-medio);
        }
        .calidad-entidad {
            display: inline-flex; align-items: center; gap: 6px;
            background: var(--verde-suave);
            border: 1px solid var(--verde-borde);
            color: var(--verde-oscuro);
            font-size: 1.1rem;
            font-weight: 600;
            padding: 5px 13px;
            border-radius: 50px;
            margin: 3px;
        }

        /* ── FOOTER STRIP ── */
        .footer-strip {
            background: var(--verde-oscuro);
            padding: 28px 0;
            text-align: center;
        }
        .footer-strip p { color: rgba(255,255,255,.6); font-size: .85rem; margin: 0; }
        .footer-strip strong { color: var(--dorado-claro); }

        /* ── ANIMATIONS ── */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(22px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .animate-in { animation: fadeInUp .55s ease both; }
        .delay-1 { animation-delay: .08s; }
        .delay-2 { animation-delay: .16s; }
        .delay-3 { animation-delay: .24s; }
        .delay-4 { animation-delay: .32s; }
        .delay-5 { animation-delay: .40s; }
        .delay-6 { animation-delay: .48s; }
    </style>
</head>
<body>

    @include('templates.header')

    <!-- ══════════ HERO ══════════ -->
    <section class="hero-section">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    {{-- <div class="badge-tag animate-in">Droguería · Cabildo Mayor Yanaconas</div> --}}
                    <h1 class="animate-in delay-1">Nuestro <span>equipo de</span><br>Dinamizadores</h1>
                    <div class="hero-divider animate-in delay-2"></div>
                    <p class="lead animate-in delay-3">
                        Conformado por dinamizadores altamente capacitados, comprometidos con la salud y el bienestar de nuestros comuneros, brindando un servicio responsable, oportuno y de calidad
                    </p>
                </div>
                <div class="col-lg-4 d-none d-lg-flex justify-content-end animate-in delay-4">
                    {{-- <div style="width:130px;height:130px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                        <i class="bi bi-building-check" style="font-size:3.5rem;color:rgba(255,255,255,.6);"></i>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════ NAV TABS ══════════ -->
    <nav class="nav-tabs-custom">
        <div class="container">
            <div class="d-flex overflow-auto">
                <a class="nav-link active" href="#valores"><i class="bi bi-stars"></i>Valores</a>
                <a class="nav-link" href="#derechos"><i class="bi bi-shield-check"></i>Derechos</a>
                <a class="nav-link" href="#deberes"><i class="bi bi-person-check"></i>Deberes</a>
                <a class="nav-link" href="#enfoque"><i class="bi bi-globe-americas"></i>Enfoque Intercultural</a>
                <a class="nav-link" href="#calidad"><i class="bi bi-award"></i>Política de Calidad</a>
            </div>
        </div>
    </nav>


    <!-- ══════════ VALORES CORPORATIVOS ══════════ -->
    <section id="valores" class="content-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <p class="section-eyebrow">Identidad institucional</p>
                    <h2 class="section-title">Valores Corporativos</h2>
                    <div class="section-line"></div>
                </div>
            </div>
            <div class="row g-4">

                <div class="col-sm-6 col-lg-4 animate-in">
                    <div class="valor-card">
                        <div class="icon-wrap"><i class="bi bi-people-fill"></i></div>
                        <h5>Respeto y Valoración Cultural</h5>
                        <p>Reconocemos y honramos la diversidad de usos y costumbres de la comunidad indígena y demás afiliados, adaptando nuestros servicios a sus particularidades.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-1">
                    <div class="valor-card img-anime-1">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-2">
                    <div class="valor-card">
                        <div class="icon-wrap"><i class="bi bi-patch-check-fill"></i></div>
                        <h5>Calidad y Profesionalismo</h5>
                        <p>Cumplimos con los más altos estándares de calidad en nuestros productos y servicios, operando dentro del marco legal colombiano con un equipo competente y ético.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-3">
                    <div class="valor-card">
                        <div class="icon-wrap"><i class="bi bi-emoji-smile-fill"></i></div>
                        <h5>Calidez Humana</h5>
                        <p>Brindamos una atención cercana, amable y empática, generando un ambiente de confianza y respeto con nuestros usuarios.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-4">
                    <div class="valor-card img-anime-2">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-4">
                    <div class="valor-card">
                        <div class="icon-wrap"><i class="bi bi-eye-fill"></i></div>
                        <h5>Integridad</h5>
                        <p>Actuamos con honestidad, transparencia y responsabilidad en todas nuestras operaciones y relaciones.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-1">
                    <div class="valor-card">
                        <div class="icon-wrap"><i class="bi bi-heart-pulse-fill"></i></div>
                        <h5>Compromiso Social</h5>
                        <p>Estamos dedicados al bienestar de la comunidad, ofreciendo un servicio accesible, equitativo y sensible a sus necesidades de salud.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-5">
                    <div class="valor-card img-anime-3">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-5">
                    <div class="valor-card">
                        <div class="icon-wrap"><i class="bi bi-chat-dots-fill"></i></div>
                        <h5>Comunicación</h5>
                        <p>Valoramos sus opiniones y sugerencias para la mejora continua de nuestro servicio y la comunidad.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ══════════ DERECHOS ══════════ -->
    <section id="derechos" class="content-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <p class="section-eyebrow">Marco de atención</p>
                    <h2 class="section-title">Derechos de los Usuarios</h2>
                    <div class="section-line"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="dd-panel animate-in">
                        <div class="dd-panel-header derechos">
                            <div class="header-icon"><i class="bi bi-shield-fill-check"></i></div>
                            <div>
                                <h3>Sus Derechos</h3>
                                <small>Garantizados por la Constitución y el Derecho Propio Yanacona</small>
                            </div>
                        </div>
                        <ul class="dd-list">
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Atención digna y sin discriminación</strong>
                                    <span>Recibir un trato respetuoso, conforme a la Constitución Política de Colombia y el enfoque diferencial indígena.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Reconocimiento de la identidad cultural</strong>
                                    <span>Ser atendido respetando la cosmovisión, usos, costumbres y el Derecho Propio del Pueblo Yanacona.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Acceso a servicios de salud intercultural (SISPI)</strong>
                                    <span>Recibir atención articulada entre medicina occidental y medicina propia, según los lineamientos del SISPI.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Información clara y oportuna</strong>
                                    <span>Conocer el uso adecuado, dosis, contraindicaciones y efectos de los medicamentos dispensados.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Calidad y seguridad en los medicamentos</strong>
                                    <span>Recibir medicamentos autorizados, en buen estado y correctamente dispensados, conforme a la normativa sanitaria (INVIMA y Ministerio de Salud).</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Confidencialidad de la información</strong>
                                    <span>Protección de sus datos personales y de salud (Ley 1581 de 2012 y principios comunitarios).</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Participación comunitaria</strong>
                                    <span>Ser escuchado y participar en los procesos de mejora del servicio a través del Cabildo.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Prioridad como miembro de la comunidad indígena</strong>
                                    <span>En el marco de la autonomía y el gobierno propio Yanacona.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ══════════ DEBERES ══════════ -->
    <section id="deberes" class="content-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <p class="section-eyebrow">Responsabilidad compartida</p>
                    <h2 class="section-title">Deberes de los Usuarios</h2>
                    <div class="section-line"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="dd-panel animate-in">
                        <div class="dd-panel-header deberes">
                            <div class="header-icon"><i class="bi bi-person-fill-check"></i></div>
                            <div>
                                <h3>Sus Deberes</h3>
                                <small>Para fortalecer la comunidad y el uso responsable del servicio</small>
                            </div>
                        </div>
                        <ul class="dd-list">
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Respetar el Gobierno Propio</strong>
                                    <span>Acatar normas, decisiones y orientaciones del Cabildo Mayor Yanacona.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Uso responsable de los medicamentos</strong>
                                    <span>Seguir indicaciones del personal de salud y evitar la automedicación.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Cuidado de los recursos comunitarios</strong>
                                    <span>Hacer uso adecuado de los medicamentos y servicios disponibles.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Brindar información veraz</strong>
                                    <span>Informar correctamente sobre su estado de salud al personal de la droguería.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Respeto al personal de la droguería</strong>
                                    <span>Mantener un trato digno y respetuoso con todo el equipo de trabajo.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Cumplir normas internas</strong>
                                    <span>Respetar horarios, turnos y procedimientos establecidos por el establecimiento.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Fortalecer la medicina propia</strong>
                                    <span>Valorar y respetar los saberes ancestrales y prácticas tradicionales del Pueblo Yanacona.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Cuidado de la salud colectiva</strong>
                                    <span>Adoptar prácticas de prevención y armonía con la comunidad y el territorio.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ══════════ ENFOQUE INTERCULTURAL ══════════ -->
    <section id="enfoque" class="content-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <p class="section-eyebrow">Identidad y autonomía</p>
                    <h2 class="section-title">Enfoque Propio e Intercultural</h2>
                    <div class="section-line"></div>
                </div>
            </div>
            <div class="row g-4 align-items-stretch">

                <!-- Marco normativo -->
                <div class="col-lg-6 animate-in">
                    <div class="enfoque-highlight h-100">
                        <p class="mb-3" style="color:var(--dorado-claro);font-size:.75rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;">Marco Normativo</p>
                        <h4 style="font-family:'Playfair Display',serif;color:var(--blanco);font-size:1.2rem;margin-bottom:24px;">Este establecimiento se rige por:</h4>

                        <div class="enfoque-marco-item">
                            <i class="bi bi-journal-bookmark-fill"></i>
                            <span><strong>Constitución Política de Colombia</strong> – Art. 7, 49 y 330</span>
                        </div>
                        <div class="enfoque-marco-item">
                            <i class="bi bi-heart-pulse-fill"></i>
                            <span><strong>SISPI</strong> – Sistema Indígena de Salud Propio e Intercultural</span>
                        </div>
                        <div class="enfoque-marco-item">
                            <i class="bi bi-tree-fill"></i>
                            <span><strong>Ley de Origen, Derecho Mayor y Derecho Propio</strong> Yanacona</span>
                        </div>
                        <div class="enfoque-marco-item">
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span><strong>Normativa sanitaria nacional</strong> – Ministerio de Salud e INVIMA</span>
                        </div>

                        <div class="mt-4">
                            <blockquote>"La salud es armonía con el territorio, el espíritu y la comunidad."</blockquote>
                        </div>
                    </div>
                </div>

                <!-- Pilares -->
                <div class="col-lg-6 animate-in delay-2">
                    <div style="background:var(--blanco);border:1px solid var(--verde-borde);border-radius:16px;padding:36px;height:100%;">
                        <p class="section-eyebrow mb-2">Visión integral</p>
                        <h4 style="font-family:'Playfair Display',serif;color:var(--verde-oscuro);font-size:1.2rem;margin-bottom:8px;">Salud como equilibrio</h4>
                        <p style="font-size:.9rem;color:var(--texto-medio);margin-bottom:28px;line-height:1.7;">
                            Promovemos la salud como equilibrio entre persona, comunidad, naturaleza y espiritualidad, integrando los saberes propios del Pueblo Yanacona con la medicina occidental.
                        </p>
                        <div class="d-flex flex-wrap">
                            <span class="pilar-badge" style="background:var(--verde-suave);border-color:var(--verde-borde);color:var(--verde-oscuro);">
                                <i class="bi bi-person-heart" style="color:var(--verde-medio);"></i> Persona
                            </span>
                            <span class="pilar-badge" style="background:var(--verde-suave);border-color:var(--verde-borde);color:var(--verde-oscuro);">
                                <i class="bi bi-people-fill" style="color:var(--verde-medio);"></i> Comunidad
                            </span>
                            <span class="pilar-badge" style="background:var(--verde-suave);border-color:var(--verde-borde);color:var(--verde-oscuro);">
                                <i class="bi bi-tree" style="color:var(--verde-medio);"></i> Naturaleza
                            </span>
                            <span class="pilar-badge" style="background:var(--verde-suave);border-color:var(--verde-borde);color:var(--verde-oscuro);">
                                <i class="bi bi-stars" style="color:var(--dorado);"></i> Espiritualidad
                            </span>
                        </div>

                        <hr style="border-color:var(--verde-borde);margin:28px 0;">

                        <div class="row g-3 text-center">
                            <div class="col-4">
                                <div style="background:var(--verde-suave);border-radius:12px;padding:16px 8px;">
                                    <i class="bi bi-globe-americas" style="font-size:1.6rem;color:var(--verde-oscuro);display:block;margin-bottom:6px;"></i>
                                    <small style="font-size:.75rem;font-weight:600;color:var(--verde-oscuro);">Intercultural</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div style="background:var(--verde-suave);border-radius:12px;padding:16px 8px;">
                                    <i class="bi bi-shield-fill" style="font-size:1.6rem;color:var(--verde-oscuro);display:block;margin-bottom:6px;"></i>
                                    <small style="font-size:.75rem;font-weight:600;color:var(--verde-oscuro);">Autónomo</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div style="background:var(--verde-suave);border-radius:12px;padding:16px 8px;">
                                    <i class="bi bi-heart-fill" style="font-size:1.6rem;color:var(--verde-oscuro);display:block;margin-bottom:6px;"></i>
                                    <small style="font-size:.75rem;font-weight:600;color:var(--verde-oscuro);">Comunitario</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ══════════ POLÍTICA DE CALIDAD ══════════ -->
    <section id="calidad" class="content-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <p class="section-eyebrow">Compromiso institucional</p>
                    <h2 class="section-title">Política de Calidad</h2>
                    <div class="section-line"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-in">
                    <div class="calidad-card">
                        <div class="calidad-card-header">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-award-fill" style="font-size:2rem;color:var(--dorado-claro);"></i>
                                <div>
                                    <h3>Droguería Cabildo Mayor Yanaconas</h3>
                                    <small>Departamento del Cauca · Colombia</small>
                                </div>
                            </div>
                        </div>
                        <div class="calidad-body">
                            <p>
                                En <strong style="color:var(--verde-oscuro);">DROGUERÍA CABILDO MAYOR YANACONAS</strong> nos comprometemos con la distribución, dispensación y comercialización de medicamentos, dispositivos médicos e insumos, garantizando la calidad, seguridad y trazabilidad de nuestros productos en el departamento del Cauca.
                            </p>
                            <p>
                                Nuestra gestión se orienta al cumplimiento de los objetivos organizacionales mediante la capacitación continua de nuestro talento humano, la adecuada administración, control y ejecución de los procesos, y la implementación de la normatividad vigente exigida por las autoridades competentes.
                            </p>
                            <p>
                                Asimismo, promovemos el mejoramiento continuo de nuestros procesos y el fortalecimiento de nuestras instalaciones físicas en cada punto de dispensación, con el fin de asegurar un servicio oportuno, seguro y confiable para nuestros comuneros.
                            </p>
                            <p>
                                En <strong style="color:var(--verde-oscuro);">DROGUERÍA CABILDO MAYOR YANACONAS</strong> reafirmamos nuestro compromiso con la calidad, la transparencia y la confianza, contribuyendo al fortalecimiento del sistema de salud en el departamento del Cauca.
                            </p>

                            <hr style="border-color:var(--verde-borde);margin:24px 0;">

                            <p class="mb-2" style="font-size:.82rem;font-weight:700;color:var(--texto-medio);text-transform:uppercase;letter-spacing:.1em;">Bajo la vigilancia de:</p>
                            <div>
                                <span class="calidad-entidad"><i class="bi bi-building-fill"></i> Secretaría de Salud</span>
                                <span class="calidad-entidad"><i class="bi bi-file-earmark-medical-fill"></i> INVIMA</span>
                                <span class="calidad-entidad"><i class="bi bi-shield-fill-check"></i> SUPERSALUD</span>
                                <span class="calidad-entidad"><i class="bi bi-hospital-fill"></i> Min. Salud y Protección Social</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ══════════ FOOTER STRIP ══════════ -->



    <!-- Bootstrap 5.3.0 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Smooth scroll for nav tabs
        document.querySelectorAll('.nav-tabs-custom a[href^="#"]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 62;
                    const top = target.getBoundingClientRect().top + window.scrollY - offset;
                    window.scrollTo({ top, behavior: 'smooth' });
                }
            });
        });

        // Active nav tab on scroll
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-tabs-custom .nav-link');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(sec => {
                if (window.scrollY >= sec.offsetTop - 100) current = sec.getAttribute('id');
            });
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) link.classList.add('active');
            });
        });

        // Intersection Observer for animate-in
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.animate-in').forEach(el => {
            el.style.animationPlayState = 'paused';
            observer.observe(el);
        });
    </script>

<footer>
  @include('templates.footer')
</footer>

</body>
</html>
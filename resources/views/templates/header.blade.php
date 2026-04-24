<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebDrogueria - Inicio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-green: #157347;
            --hover-green: #198754;
            --light-bg: #f8f9fa;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
        }

        /* Top Bar Minimalista */
        .top-bar {
            background: var(--primary-green);
            color: white;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }

        /* Navbar Styling */
        .navbar {
            padding: 1rem 0;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .navbar-brand img {
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover img {
            transform: scale(1.05);
        }

        /* Botones del Menú */
        .nav-link {
            color: #444 !important;
            font-weight: 500;
            padding: 0.8rem 1.2rem !important;
            margin: 0 5px;
            border-radius: 8px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
        }

        /* Efecto Hover Moderno */
        .nav-link:hover {
            color: white !important;
            background-color: var(--primary-green);
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(21, 115, 71, 0.3);
        }

        /* Opción Activa */
        .nav-link.active {
            color: white !important;
            background: #0b9c06; /* Un tono oscuro para resaltar el actual */
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        /* Línea decorativa debajo del logo */
        .navbar-nav {
            align-items: center;
        }

        /* Responsivo: Ajuste para móviles */
        @media (max-width: 991px) {
            .nav-link {
                margin: 5px 0;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <div class="top-bar py-2 text-center">
        <span>
            <i class="bi bi-telephone-fill me-2"></i> Nuestras líneas de atención: <strong>(602) 725-1000</strong>
        </span>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">

            <a class="navbar-brand" href="{{ route('inicio') }}">
                <img src="/img/logouno.png" width="180" alt="Logo">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                            <i class="bi bi-house-door me-1"></i> Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('sedes.*') ? 'active' : '' }}" href="{{ route('sedes.ubicacion') }}">
                            <i class="bi bi-geo-alt me-1"></i> Nuestras Sedes
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-chat-dots me-1"></i> PQRS
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('nosotros') }}">
                            <i class="bi bi-people me-1"></i> Nosotros
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

</body>
</html>
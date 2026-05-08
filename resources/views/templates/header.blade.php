<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebDrogueria - Inicio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
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

        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav">
            <i class="bi bi-list fs-1 text-success"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="menuNav">
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
                    <a class="nav-link {{ request()->routeIs(['pqrs', 'pqrs.*']) ? 'active' : '' }}" href="{{ route('pqrs.index') }}">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
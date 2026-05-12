<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Droguería Cabildo Mayor Yanaconas')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --verde-oscuro: #1a5c2a;
            --verde-medio: #2d7a3e;
            --verde-claro: #4a9e5c;
            --verde-suave: #e8f4ea;
            --verde-borde: #c5dfc9;
            --dorado: #b8960c;
            --dorado-claro: #f0d060;
            --crema: #fdf9f0;
            --texto-oscuro: #1c2b1e;
            --texto-medio: #3d4f40;
            --blanco: #ffffff;

            --primary-green: #157347;
            --hover-green: #198754;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
            font-family: "Roboto", sans-serif;
        }
    </style>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">

    @stack('styles')
</head>

<body>

    @include('templates.header')

    <main>
        @yield('content')
    </main>

    @include('templates.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>

</html>
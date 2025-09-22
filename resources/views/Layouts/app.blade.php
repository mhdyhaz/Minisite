<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.12/themes/default/style.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Vazirmatn' rel='stylesheet'>

    @stack('styles')
    <style>
        html,
        body {
            background: linear-gradient(135deg, #e9dec4, #c7bb9e);
            margin: 0;
            padding: 0;
            font-family: 'Vazirmatn', sans-serif;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    @if(!in_array(Request::path(), ['login', 'register']))
        @include('Layouts.header')
    @endif

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @if(!in_array(Request::path(), ['login', 'register']))
        @include('Layouts.footer')
    @endif

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
        crossorigin="anonymous"></script>
    @stack('scripts')

</body>

</html>
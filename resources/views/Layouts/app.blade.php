<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.12/themes/default/style.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Vazirmatn' rel='stylesheet'>

    @stack('styles')
    <style>
     html, body {
    background-color: #e9ddc6 !important;
    color: #E6D5B8;
    margin: 0;
    padding: 0;
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    @stack('scripts')

</body>

</html>
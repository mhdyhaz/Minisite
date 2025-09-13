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
        body {
            margin: 0;
            font-family: 'Vazirmatn', sans-serif;
            direction: rtl;
            background: #f9f6f1;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    @include('Layouts.header') 

    <main class="flex-grow-1">
        @yield('content') 
    </main>
    
    @include('Layouts.footer') 

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    @stack('scripts')

</body>
</html>

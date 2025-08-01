<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.12/themes/default/style.min.css" />

    <link href='https://fonts.googleapis.com/css?family=Vazirmatn' rel='stylesheet'>
    {{-- چون نمیدونم تاثیر این دقیقا کجاس و وقتی این بخش فرانتش تموم شد میام چکش میکنم --}}
    
    {{-- <style>

        body {
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            background: radial-gradient(circle, rgb(255, 255, 255) 0%, rgb(245, 245, 245) 100%);
            color: black;
            overflow-x: hidden;
        }

    </style> --}}
</head>
<body>
    @include('Layouts.header') 
    <div class="content">
        @yield('content') 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100..900&display=swap');
        </style>
</body>
</html>
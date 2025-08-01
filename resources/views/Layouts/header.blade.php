<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <title>header</title>

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            direction: rtl;
            font-family: 'Vazirmatn', sans-serif;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 380px;
            background: #76645A;
            background-size: 600% 600%;
            color: white;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header h1 {
            font-size: 28px;
            margin: 0;
            font-weight: bold;

        }


        .background-image {
            position: relative;
            top: 49px;
            right: 0;
            width: 400px;
            height: 280px;
            background: url('{{ asset('images/atr.jpg') }}') no-repeat center center;
            background-size: cover;
            border-radius: 30px;
            z-index: 0;
        }


        #button {
            background-color: #1C1714;
            color: white;
            border-radius: 30px;
            position: absolute;
            font-size: 18px;
            width: 60px;
            height: 30px;
            top: 20px;
            left: 50px;
            border: none;
        }

        #header {
            background-color: #1C1714;
            color: white;
            border-radius: 30px;
            position: absolute;
            font-size: 20px;
            width: 50%;
            height: 40px;
            top: 20px;
            text-align: center;
            border: none;
        }

        .a {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 20px;
            color: #76645A;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="background-image"></div>
        <form action="{{ route('home') }}" method="GET"></form>
        <button id="button" type="submit">
            <i class="bi bi-box-arrow-right"></i>
        </button>
        <button id="header" type="reset"></button>
        <label id="header"></label>
    </div>
    {{-- cp ~/Desktop/atr.jpg ~/Desktop/MiniSite/public/images/ این دستور میاد عکس رو میذاره تو فایلی که ساختیم در اینجا
    --}}



</body>

</html>
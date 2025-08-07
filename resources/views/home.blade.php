<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <style>
        html,
        body {
            background-color: #fff;
            padding-top: 380px;
            min-height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            
        }

    
    </style>
</head>

<body>
    @extends('Layouts.app')

    @section('content')
    
        @if ($errors->any())
            <div style="text-align: left;width: 31rem;position: relative;left: 61px;" class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <main>
            <section style="min-height: 1000px; background-color: #2a1b14; color: white; padding-top: 50px;">
                <h1>صفحه اصلی</h1>
                <p>اینجا محتوای صفحه اصلی قرار می‌گیره.</p>
                <p>مثلاً محصولات، متن معرفی، عکس‌ها، بخش درباره ما و...</p>
            </section>
        </main>
    
    @endsection
    
</body>

</html>
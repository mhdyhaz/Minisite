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
            background-color: #1C1714;
            padding-top: 380px;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
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
    @endsection
</body>

</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;1,700&family=Inter:wght@700&family=Montserrat:wght@100;300&display=swap" rel="stylesheet">
    <title>Хостел</title>
    @vite(['resources/css/header.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('main')}}">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('rooms')}}">Комнаты</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">О нас</a>
            </li>
        </ul>
    </header>
</body>
</html>
@yield('header')

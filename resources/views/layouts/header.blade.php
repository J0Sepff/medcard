<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>medКарта</title>
    <link rel="stylesheet" href="css/nav.css">
    @yield('style')
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
    <nav>
        <div class="navbg">
        </div>
        @if (Route::has('login'))
            <div class="button">
                @auth
                    <div class="auth"><a href="{{ url('/home') }}">Личный кабинет</a></div>
                @else
                    <div class="reg"><a href="{{ route('register') }}">Регистрация</a></div>
                    <div class="auth"><a href="{{ route('login') }}">Авторизация</a></div>
                @endauth
            </div>
        @endif
        <logo>
            <img src="images/Logoweb@3x.png">
        </logo>
    </nav>
    @yield('content')
</body>
</html>

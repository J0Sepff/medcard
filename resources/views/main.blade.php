<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>medКарта</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
<header>
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
    <div class="text">
        <h1>И ТЕБЯ ВЫЛЕЧИМ</h1>
        <h2>УСТАНОВИ ПРИЛОЖЕНИЕ И СЛЕДИ ЗА СВОИМ ЗДОРОВЬЕМ</h2>
    </div>
</header>
<div class="content">
    <div class="ad">
        <div class="block">
            <img src="images/iconHealthweb@3x.png">
            <h3>
                Качество
            </h3>
            <p>
                Мы работаем круглосуточно. Экстренная и скорая помощь, вызов врача на дом, диагностика (УЗИ, КТ, МРТ), хирургия
            </p>
        </div>
        <div class="block">
            <img src="images/iconAmbulanceweb@3x.png">
            <h3>
                Скорость
            </h3>
            <p>
                Мы работаем круглосуточно. Экстренная и скорая помощь, вызов врача на дом, диагностика (УЗИ, КТ, МРТ), хирургия
            </p>
        </div>
        <div class="block">
            <img src="images/iconTreatmentPlanweb@3x.png">
            <h3>
                Комфорт
            </h3>
            <p>
                Мы работаем круглосуточно. Экстренная и скорая помощь, вызов врача на дом, диагностика (УЗИ, КТ, МРТ), хирургия
            </p>
        </div>
    </div>
    <p>Зарегистрируйтесь и Ваш врач всегда будет рядом с Вами.</p>
    <div class="adreg"><a href="#">РЕГИСТРАЦИЯ</a></div>
</div>
</body>
</html>
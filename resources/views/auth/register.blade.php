<!DOCTYPE html>
<html lang="ru" >

<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="css/reg.css">
</head>

<body>
<div class="background"></div>
<div class="form">
    <div class="logo">
        <a href="{{url('/')}}"><img src="images/Logoweb@3x.png" height="20px"></a>
        <h1>Регистрация</h1>
    </div>
    <hr>
    <div class="elem">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input id="name" type="text" name="name" placeholder="ФИО" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

        @if ($errors->has('name'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
        @endif
        <br>
        <input id="email" type="email" name="email" placeholder="E-Mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
        <br>
        <input id="password" type="password" name="password" placeholder="Пароль" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
        <br>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Ещё раз" required><br>
        <label>Дата рождения: </label>
        <input id="date" type="date" name="date" min="1901-01-01" max="2018-12-31" required><br>
        <label class="label"><input type="checkbox" name="agree" required>Я согласен с <a href="#">условиями использования</a> сервиса</label>
        <input type="submit" name="submit" value="Зарегистрироваться">
        <a href="{{ url('login') }}" class="auth">Имеется аккаунт?</a>
        </form>
    </div>
</div>
</body>

</html>



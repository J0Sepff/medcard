<!DOCTYPE html>
<html lang="ru" >

<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="css/reg.css">
</head>

<body>
<div class="background"></div>
<div class="form" style="height: 312px; margin: 30vh 0 30vh -225px;">
    <div class="logo">
        <a href="{{url('/')}}"><img src="images/Logoweb@3x.png" height="20px"></a>
        <h1>Авторизация</h1>
    </div>
    <hr>
    <div class="elem">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input id="E-Mail" type="email" name="email" placeholder="E-Mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
            <label class="label"><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Запомнить меня</label>
            <input type="submit" name="submit" value="Авторизоваться" style="margin-top:5px;">
            <a href="{{ url('register') }}" class="auth" style="padding-bottom: 5px;">Ещё не зарегистрирован?</a>
            <a href="{{ route('password.request') }}" class="auth">
                Забыли пароль?
            </a>
        </form>
    </div>
</div>
</body>

</html>


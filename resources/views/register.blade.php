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
        <img src="images/Logoweb@3x.png" height="20px">
        <h1>Регистрация</h1>
    </div>
    <hr>
    <div class="elem">
        <input type="text" name="name" placeholder="ФИО"><br>
        <input type="text" name="login" placeholder="Логин"><br>
        <input type="password" name="password" placeholder="Пароль"><br>
        <input type="password" name="repassword" placeholder="Ещё раз"><br>
        <label>Дата рождения: </label>
        <input type="date" name="date" min="1901-01-01" max="2018-12-31"><br>
        <label class="label"><input type="checkbox" name="agree">Я согласен с <a href="#">условиями использования</a> сервиса</label>
        <input type="submit" name="submit" value="Зарегистрироваться">
        <a href="auth.html" class="auth">Имеется аккаунт?</a>
    </div>
</div>
</body>

</html>

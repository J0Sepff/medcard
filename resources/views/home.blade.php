@extends('layouts.header')

@section('style')
    <link rel="stylesheet" href="css/blank.css">
@endsection

@section('content')
    <div class="container">
        <div class="info">
            <div class="avatar"><img src="images/ava.png" alt="Аватар" style="border: 1px solid #000000;border-radius: 100px; width: 100px; height: 100px;">
            </div><div class="userinfo"><p>Иван Петрович</p>
            <p>г. Санкт-Петербург</p>
            <p>01.09.1979</p></div>
        </div>
        <div class="steps">
            <p><span>Шаг 1</span><span>Шаг 2</span><span>Шаг 3</span></p>
        </div>
        <div class="blank">
            <input type="text" placeholder="" required><br>
            <input type="text" placeholder="" required><br>
            <input type="text" placeholder="" required><br>
            <input type="text" placeholder="" required><br>
            <input type="text" placeholder="" required><br>
            <input type="submit" value="submit"><br>
            @if (Auth::guest())
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @else
                {{ Auth::user()->name }}
                <a href="{{ route('logout') }}">Logout</a>
            @endif
        </div>
    </div>
{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection

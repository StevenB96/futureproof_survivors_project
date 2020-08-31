@extends('templates/log_in_template')

@section('title')
    Login
@endsection

@section('form')
    <form class="topLayer bg-light fontMedium fontMinimumSpace text-dark logInForm" id="loginForm" action="http://127.0.0.1:8000/user/login" method="get"> {{ csrf_field() }}
        <div style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 1; grid-row-end: 2; text-align: center;">
            <p class="fontLarge fontBold fontFill center">Log In</p><a class="nav-link" href="http://127.0.0.1:8000/register">Don't have an account? Click here to register.</a>
        </div>
        <div class="form-group" style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 2; grid-row-end: 3;">
            <label for="email" class="fontMinimumSpace">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group" style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 3; grid-row-end: 4;">
            <label for="password" class="fontMinimumSpace">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="checkbox center" style="grid-column-start: 1; grid-column-end: 2; grid-row-start: 4; grid-row-end: 5; text-align: center;">
            <label class="fontMinimumSpace">Remember me <input class="fontMinimumSpace" type="checkbox" name="remember_me"></label required>
        </div>
        <button type="submit" class="btn btn-secondary fontMedium fontMinimumSpace" style="grid-column-start: 2; grid-column-end: 3; grid-row-start: 4; grid-row-end: 5;">Log In</button>
    </form>
@endsection
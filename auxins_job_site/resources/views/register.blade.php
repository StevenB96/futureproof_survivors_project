@extends('templates/log_in_template')

@section('title')
    Register
@endsection

@section('form')
    <form class="topLayer bg-light fontMedium fontMinimumSpace text-dark logInForm" id="registrationForm" action="http://127.0.0.1:8000/user/create" method="post"> {{ csrf_field() }}
        <div style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 1; grid-row-end: 2; text-align: center;">
            <p class="fontLarge fontBold fontFill center">Register</p><a class="nav-link" href="http://127.0.0.1:8000/log_in">Already have an account? Click here to login.</a>
        </div>
        <div class="form-group" style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 2; grid-row-end: 3;">
            <label for="forename" class="fontMinimumSpace">Forename:</label>
            <input type="text" class="form-control fontMedium" id="forename" name="forename" required>
        </div>
        <div class="form-group" style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 3; grid-row-end: 4;">
            <label for="surname" class="fontMinimumSpace">Surname:</label>
            <input type="text" class="form-control fontMedium" id="surname" name="surname" required>
        </div>    
        <div class="form-group" style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 4; grid-row-end: 5;">
            <label for="email" class="fontMinimumSpace">Email address:</label>
            <input type="email" class="form-control fontMedium" id="email" name="email" required>
        </div>
        <div class="form-group" style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 5; grid-row-end: 6;">
            <label for="password" class="fontMinimumSpace">Password:</label>
            <input type="password" class="form-control fontMedium" id="password" name="password" oninput="setCustomValidity('')" required>
        </div>
        <div class="form-group" style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 7; grid-row-end: 8;">
            <label for="password_confirm" class="fontMinimumSpace">Re-type password:</label>
            <input type="password" class="form-control fontMedium" id="password_confirm" name="password_confirm" oninput="setCustomValidity('')" required>
        </div>
        <button type="submit" id="registerSubmit" class="btn btn-secondary fontMedium fontMinimumSpace" style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 8; grid-row-end: 9;">Register</button>
    </form>
@endsection
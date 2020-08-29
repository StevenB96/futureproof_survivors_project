@extends('templates/index')

@section('title')
    Register
@endsection

@section('form')
    <form class="topLayer bg-light indexText text-dark" id="registrationForm" action="/action_page.php">
        <div style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 1; grid-row-end: 2; text-align: center;">
            <strong class="navStrong indexText">Register</strong><a class="nav-link" href="http://127.0.0.1:8000/login">Already have an account? Click here to login.</a>
        </div>
        <div class="form-group" style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 2; grid-row-end: 3;">
            <label for="forename">Forename:</label>
            <input type="text" class="form-control" id="forename" name="forename" required>
        </div>
        <div class="form-group" style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 3; grid-row-end: 4;">
            <label for="email">Surname:</label>
            <input type="text" class="form-control" id="surname" name="surname" required>
        </div>    
        <div class="form-group" style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 4; grid-row-end: 5;">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group" style="grid-column-start: 1; grid-column-end: 2; grid-row-start: 5; grid-row-end: 6;">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password" name="password" oninput="setCustomValidity('')" required>
        </div>
        <div class="form-group" style="grid-column-start: 2; grid-column-end: 3; grid-row-start: 5; grid-row-end: 6;">
            <label for="pwd">Re-type password:</label>
            <input type="password" class="form-control" id="password_confirm" name="password_confirm" oninput="setCustomValidity('')" required>
        </div>
        <div class="checkbox" style="grid-column-start: 1; grid-column-end: 2; grid-row-start: 6; grid-row-end: 7; text-align: center;">
            <label>Remember me <input type="checkbox" name="remember_me"></label required>
        </div>
        <button type="submit" id="registerSubmit" class="btn btn-secondary indexText" style="grid-column-start: 2; grid-column-end: 3; grid-row-start: 6; grid-row-end: 7;">Submit</button>
    </form>
@endsection
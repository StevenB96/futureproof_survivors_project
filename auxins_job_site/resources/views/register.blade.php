@extends('root')


@section('title')
    Register
@endsection

@section('content')
    <nav class="navbar navbar-light bg-light pageNav">
        <strong class="pageStrong"><u>Register</u></strong>

        <a href="http://127.0.0.1:8000/about" class="btn bg-light pageA pageButton">Digital CV Builder</a>

        <a href="http://127.0.0.1:8000/dcv_builder" class="btn bg-light pageA pageButton">Job Coaching</a>

        <div class="btn-group">
            <button type="button" class="btn bg-light dropdown-toggle pageButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Settings
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item bg-light pageButton" href="#">Account</a>
                <a class="dropdown-item bg-light pageButton" href="#">Terms & Conditions</a>
                <a class="dropdown-item bg-light pageButton" href="#">Developers</a>
                <a class="dropdown-item bg-light pageButton" href="#">Logout</a>
            </div>
        </div>
    </nav>
@endsection
@extends('root')

@section('title')
    About
@endsection

@section('content')
    <nav class="navbar navbar-light bg-light pageNav">
        <strong class="pageStrong"><u>About</u></strong>

        <a href="http://127.0.0.1:8000/dcv_builder" class="btn bg-light pageA">Digital CV Builder</a>

        <a href="http://127.0.0.1:8000/job_coaching" class="btn bg-light pageA">Job Coaching</a>

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
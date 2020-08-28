@extends('templates/root')

@section('title')
    Job Coaching
@endsection

@section('content')
    <nav class="navbar navbar-light bg-light primmaryNav text-dark">
        <a href="http://127.0.0.1:8000/about" class="btn bg-light navA">About</a>

        <a href="http://127.0.0.1:8000/dcv_builder" class="btn bg-light navA">Digital CV Builder</a>

        <strong class="navStrong">Job Coaching</strong>

        <div class="btn-group">
            <button type="button" class="btn bg-light dropdown-toggle navButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item bg-light navButton" href="#">Account</a>
                <a class="dropdown-item bg-light navButton" href="#">Terms & Conditions</a>
                <a class="dropdown-item bg-light navButton" href="#">Developers</a>
                <a class="dropdown-item bg-light navButton" href="#">Logout</a>
            </div>
        </div>
    </nav>
@endsection
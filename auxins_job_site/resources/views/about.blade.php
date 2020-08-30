@extends('templates/root')

@section('title')
    About
@endsection

@section('content')
    <nav class="navbar navbar-light bg-light primmaryNav text-dark">
        <strong class="navStrong">About</strong>

        <a href="http://127.0.0.1:8000/dcv_builder" class="btn bg-light navA" @guest onclick="anchorGuest(event)" @endguest>Digital CV Builder</a>

        <a href="http://127.0.0.1:8000/job_coaching" class="btn bg-light navA" @guest onclick="anchorGuest(event)" @endguest>Job Coaching</a>

        <div class="btn-group">
            <button type="button" class="btn bg-light dropdown-toggle navButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @guest onclick="anchorGuest(event)" @endguest>
            More
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item bg-light navButton" href="#">Account</a>
                <a class="dropdown-item bg-light navButton" href="#">Terms & Conditions</a>
                <a class="dropdown-item bg-light navButton" href="#">Developers</a>
                <a class="dropdown-item bg-light navButton" href="http://127.0.0.1:8000/user/logout">Logout</a>
            </div>
        </div>
    </nav>
@endsection
@extends('templates/root')

@section('title')
    Digital CV Builder
@endsection

@section('content')
    @guest <script>privatePage()</script> @endguest
    <nav class="navbar navbar-light bg-light primmaryNav text-dark">
        <a href="http://127.0.0.1:8000/about" class="btn bg-light navA">About</a>

        <strong class="navStrong">Digital CV Builder</strong>

        <a href="http://127.0.0.1:8000/job_coaching" class="btn bg-light navA">Job Coaching</a>

        <div class="btn-group">
            <button type="button" class="btn bg-light dropdown-toggle navButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
@extends('templates/base_template')

@section('title')
    About
@endsection

@section('content')
    <nav class="navbar navbar-light bg-light primmaryNav text-dark">
        <p class="fontLarge fontBold fontFill center borderBottom">About</p>

        <a href="http://127.0.0.1:8000/dcv_builder" class="btn bg-light fontLarge fontFill center noOutline" @guest onclick="anchorGuest(event)" @endguest>Digital CV Builder</a>

        <a href="http://127.0.0.1:8000/job_coaching" class="btn bg-light fontLarge fontFill center noOutline" @guest onclick="anchorGuest(event)" @endguest>Job Coaching</a>

        <div class="btn-group">
            <button type="button" class="btn bg-light dropdown-toggle fontLarge fontFill center noOutline" style="flex-direction: row;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @guest onclick="anchorGuest(event)" @endguest>
            More
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item bg-light fontLarge center noOutline" href="#">Account</a>
                <a class="dropdown-item bg-light fontLarge center noOutline" href="#">Terms & Conditions</a>
                <a class="dropdown-item bg-light fontLarge center noOutline" href="#">Developers</a>
                <a class="dropdown-item bg-light fontLarge center noOutline" href="http://127.0.0.1:8000/user/log_out">Log Out</a>
            </div>
        </div>
    </nav>
@endsection
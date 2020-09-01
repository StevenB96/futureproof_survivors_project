@extends('templates/base_template')

@section('title')
    Digital CV Builder
@endsection

@section('content')
    <nav class="navbar navbar-light bg-light primmaryNav text-dark">
        <a href="http://127.0.0.1:8000/about" class="btn bg-light fontLarge fontFill center noOutline">About</a>

        <p class="fontLarge fontBold fontFill center borderBottom">Digital CV Builder</p>

        <a href="http://127.0.0.1:8000/job_coaching" class="btn bg-light fontLarge fontFill center noOutline">Job Coaching</a>

        <div class="btn-group">
            <button type="button" class="btn bg-light dropdown-toggle fontLarge fontFill center" style="flex-direction: row;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
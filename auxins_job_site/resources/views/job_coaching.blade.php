@extends('templates/base_template')

@section('title')
    Job Coaching
@endsection

@section('content')
    <nav class="navbar navbar-light bg-light primmaryNav text-dark">
        <a href="http://127.0.0.1:8000/about" class="btn bg-light fontLarge fontFill center noOutline">About</a>

        <a href="http://127.0.0.1:8000/dcv_builder" class="btn bg-light fontLarge fontFill center noOutline">Digital CV Builder</a>

        <p class="fontLarge fontBold fontFill center borderBottom">Job Coaching</p>

        <div class="btn-group">
            <button type="button" class="btn bg-light dropdown-toggle fontLarge fontFill center noOutline" style="flex-direction: row;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item bg-light fontLarge center noOutline" href="#">Account</a>
                <a class="dropdown-item bg-light fontLarge center noOutline" href="#">Terms & Conditions</a>
                <a class="dropdown-item bg-light fontLarge center noOutline" href="#">Developers</a>
                <a class="dropdown-item bg-light fontLarge center noOutline" href="http://127.0.0.1:8000/user/logout">Log Out</a>
            </div>
        </div>
    </nav>
@endsection
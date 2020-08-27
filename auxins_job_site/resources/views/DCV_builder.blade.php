@extends('root')

@section('content')
    <nav class="navbar navbar-light bg-secondary pageNav" style="padding: 0px; text-align:center;">
        <div><strong class="pageStrong">Digital CV Builder</strong></div>

        <a href="http://127.0.0.1:8000/about" class="btn bg-secondary pageA pageButton">About</a>

        <a href="http://127.0.0.1:8000/job_coaching" class="btn bg-secondary pageA pageButton">Job Coaching</a>

        <div class="btn-group">
            <button type="button" class="btn bg-secondary dropdown-toggle pageButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Settings
            </button>
            <div class="dropdown-menu dropdown-menu-right bg-secondary">
                <button class="dropdown-item pageButton" type="button">Action</button>
                <button class="dropdown-item pageButton" type="button">Another action</button>
                <button class="dropdown-item pageButton" type="button">Something else here</button>
            </div>
        </div>
    </nav>
@endsection
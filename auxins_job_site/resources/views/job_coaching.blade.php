@extends('root')

@section('content')
    <nav class="navbar navbar-light bg-light" style="padding-top: 0px; padding-bottom: 0px;">
        <a class="navbar-brand text-dark font-weight-bold">Job Coaching</a>
        <a href="http://127.0.0.1:8000/about" class="navbar-item text-dark">About</a>
        <a href="http://127.0.0.1:8000/job_coaching" class="navbar-item text-dark">Digital CV Builder</a>
        <div class="btn-group">
            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Settings
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">Action</button>
                <button class="dropdown-item" type="button">Another action</button>
                <button class="dropdown-item" type="button">Something else here</button>
            </div>
        </div>
    </nav>
@endsection
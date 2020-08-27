@extends('root')

@section('content')
    <nav class="navbar navbar-light bg-light pageNav" style="padding: 0px; text-align:center;">
        <h5>Job Coaching</h5>

        <button href="http://127.0.0.1:8000/about" class="btn btn-light">About</button>

        <button href="http://127.0.0.1:8000/job_coaching" class="btn btn-light">Digital CV Builder</button>

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
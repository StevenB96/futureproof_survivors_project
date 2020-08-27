@extends('root')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand text-dark font-weight-bold">DIGITAL CV BUILDER</a>
        <a href="http://127.0.0.1:8000/about" class="navbar-item text-dark font-weight-bold">About</a>
        <a href="http://127.0.0.1:8000/job_coaching" class="navbar-item text-dark font-weight-bold">Job Coaching</a>
        <div class="btn-group">
        <button type="button" class="navbar-toggler" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>  
        <div class="dropdown-menu dropdown-menu-right">
            <button class="dropdown-item font-weight-bold" type="button">Account</button>
            <button class="dropdown-item font-weight-bold" type="button">Another action</button>
            <button class="dropdown-item font-weight-bold" type="button">Another action</button>
        </div>
    </nav>
@endsection
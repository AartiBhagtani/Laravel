@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is index page for laravel!</p>
        <p><a class="btn btn-primary btn-log" href="/login" role="button">Login</a>
        <a class="btn btn-primary btn-log" href="/register" role="button">Register</a>
        </p>  
    </div>
@endsection
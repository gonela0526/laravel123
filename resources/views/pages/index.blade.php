  @extends('layouts.app')

  @section('content')

  <div class="jumbotron text-center">
    <h1>Welcome to Laravel</h1>
    <p>This is a laravel Application</p>
    <p><a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a> <a class="btn btn-success btn-lg" href="{{ route('register') }}" role="button">Register</a></p>
  </div>
  @endsection
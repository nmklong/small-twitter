@extends('template')

@section('stylesheet')
@endsection

@section('content')
<h1>Register</h1>

<form method='POST' action="{{ url('/insert/user') }}">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="">
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" placeholder="">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" name="password" placeholder="">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection

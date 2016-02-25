@extends('template')

@section('stylesheet')
@endsection

@section('content')
<h1>User Info</h1>

<div class='row'>
    <label>Name</label>
    <span>{{$user_info['name']}}</span>
</div>
<div class='row'>
    <label>Username</label>
    <span>{{$user_info['username']}}</span>
</div>
<div class='row'>
    <label>Password</label>
    <span>{{$user_info['password']}}</span>
</div>
@endsection

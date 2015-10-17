@extends('app')

@section('content')
    <h1>USERS</h1>

    @foreach($users as $user)
    <user>
        <h2><a href="{{ action('UsersController@show',[$user->user_id]) }}">{{ $user->user_name }}</a></h2>
        <div class="body">{{ $user->email }}</div>
    </user>
    @endforeach
@stop
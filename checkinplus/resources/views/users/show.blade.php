@extends('app')

@section('content')
    <h1>{{ $user->user_name }}</h1>

        <user>
            {{ $user->email }}
        </user>
@stop
@extends('app')

@section('content')

    <form method = 'POST' action="/checkinplus/public/register">
    {!! csrf_field() !!}

        <div>
            Name
            <input type="user_name" name="user_name" value="{{ old('user_name') }}">
        </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>

@stop

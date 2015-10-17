@extends('app')

@section('content')
    <h1>Edit: {{$user->user_name}}</h1>

    {!! Form::model($user, ['method' => 'PATCH','action' => ['UsersController@update', $user->user_id]]) !!}
        @include('users.form', ['submitButtonText'=>'Edit User'])
    {!! Form::close() !!}


    @include('errors.list')

@stop
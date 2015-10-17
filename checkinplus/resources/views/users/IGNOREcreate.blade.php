@extends('app')

@section('content')
    <h1>Add A New User (AVAILABLE FOR MASTER BLASTER ACCOUNT ONLY)</h1>
    <hr/>

    {!! Form::open(['url' => 'users']) !!}
        @include('users.form', ['submitButtonText'=>'Create User'])
    {!! Form::close() !!}

    @include('errors.list')
@stop

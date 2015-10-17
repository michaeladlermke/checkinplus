@extends('app')

@section('content')
    <h1>Add A New Course (AVAILABLE FOR MASTER BLASTER ACCOUNT ONLY)</h1>
    <hr/>

    {!! Form::open(['url' => 'courses']) !!}
        @include('courses.form', ['submitButtonText'=>'Create Course'])
    {!! Form::close() !!}

    @include('errors.list')
@stop

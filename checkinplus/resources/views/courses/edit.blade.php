@extends('app')

@section('content')
    <h1>Edit: {{$course->course_name}}</h1>

    {!! Form::model($course, ['method' => 'PATCH','action' => ['CoursesController@update', $course->course_id]]) !!}
        @include('courses.form', ['submitButtonText'=>'Edit Course'])
    {!! Form::close() !!}


    @include('errors.list')

@stop
@extends('app')

@section('content')
    <h1>{{ $course->course_name }}</h1>

        <user>
            {{ $course->course_location }}
        </user>
@stop
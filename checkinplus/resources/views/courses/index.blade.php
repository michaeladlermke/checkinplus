@extends('app')

@section('content')
    <h1>COURSES</h1>

    @foreach($courses as $course)
    <course>
        <h2><a href="{{ action('CoursesController@show',[$course->course_id]) }}">{{ $course->course_name }}</a></h2>
        <div class="body">{{ $course->course_location }}</div>
    </course>
    @endforeach
@stop
@extends('app')
@section('content')


    <h1>About Me!: {{ $first }} {{ $last }} ?! </h1>
    <h3>PEOPLE I LIKE:</h3>
    <ul>
        @foreach($people as $person)
            <li>{{ $person }}</li>
            @endforeach
    </ul>

    <p>
    SOME STUFF SOME MORE STUFF STUFFD flkjfsjsfjsjslk fslflsjkf flkjfds fslfanklcnkelkfn flkjfnfelkjefnd.
    </p>

@stop
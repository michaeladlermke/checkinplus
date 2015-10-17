@extends('app')

@section('content')
    <h1>HOME DASHBOARD</h1>
    <div class="row">
        <div class="col-xs-6 col-sm-3">
            <b>SAMPLE CLASS LIST</b>
            <p>

            <li>CS 101 - 8:00am - 12:30pm<br>
                Instructor: Professor X<br>
            </li>
            <li>CS 300 - 4:30pm - 6:00pm<br>
                Instructor: Albert Einstein<br>
            </li>
        </div>
        <div class="col-xs-12 col-sm-6">
            <b>YOUR NEXT CLASS TO ATTEND</b><br>
            CAPSTONE CLASS STARTS IN 25 MINUTES<br>
            You are currently 12.5mi away from class.<br>
            You will be approximately 18 minutes late if you leave now.<br>
        </div>

        <!-- Add the extra clearfix for only the required viewport -->
        <div class="clearfix visible-xs"></div>
        <div class="col-xs-6 col-sm-3">
            <b>Your attendance stats:</b><br>
            <li>
                CS 101: 35/37 CLASSES ATTENDED<br>
            </li>
            <li>
                CS 300: 37/37 CLASSES ATTENDED<br>
            </li>
        </div>
    </div>

    <hr>


@stop


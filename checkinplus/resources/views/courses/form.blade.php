<div class="form-group">
    {!! Form::label('course_name', 'New Course Name: ') !!}
    {!! Form::text('course_name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('course_location', 'Course Location: ') !!}
    {!! Form::text('course_location', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('course_section_id', 'Course Section: ') !!}
    {!! Form::text('course_section_id', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('course_instructor', 'Course Instructor: ') !!}
    This will eventually contain an instructor selection tool.
</div>
<div class = "form-group">
    {!! Form::label('Semester:') !!}
    This will eventually contain a semester selection tool.
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
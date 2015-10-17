<div class="form-group">
    {!! Form::label('user_name', 'New User Name: ') !!}
    {!! Form::text('user_name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('user_password', 'Password: ') !!}
    {!! Form::text('user_password', null, ['class'=>'form-control']) !!}
</div>
<div class = "form-group">
    {!! Form::label('Check In Date:') !!}
    {!! Form::input('date','updated_at', Carbon\Carbon::now()->format('Y-m-d'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
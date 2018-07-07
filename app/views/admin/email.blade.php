@extends('layouts.master')

@section('title')
@parent
| Email Password
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Admin - Password Manager</h2>
    </div>
</div>
    
<div class="container">
    {{ Form::open(['action' => 'EmailController@setPassword', 'method' => 'POST']) }}
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {{Form::label('email', 'Email', ['class'=>'control-label'])}}
                    <input type="email" name="email" class="form-control" id="email" value="{{$email}}" readonly>
                </div>  
                <div class="form-group">
                    {{Form::label('password', 'New Password:', ['class'=>'control-label'])}}
                    <input type="password" name="password" class="form-control" id="password">
                </div> 
                <div class="form-group">
                    {{Form::label('repeat_password', 'Repeat Password:', ['class'=>'control-label'])}}
                    <input type="password" name="repeat_password" class="form-control" id="repeat_password">
                </div>
                <div class="form-group">
                    {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
                </div>
            </div>
        </div>
    {{ Form::close() }}
</div>

@stop
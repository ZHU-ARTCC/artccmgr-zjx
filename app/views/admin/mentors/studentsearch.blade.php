@extends('layouts.master')

@section('title')
@parent
| Instructing
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Admin - Instructing - Search Student</h2>
    </div>
</div>

<div class="container">
	{{ Form::open(['action' => 'MentorController@findStudent']) }}
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
       			    {{Form::label('controller', 'Controller:', ['class'=>'control-label'])}}
                	{{Form::select('controller', $user, null, ['class'=>'form-control'])}}
       			</div>
       			<div class="form-group">
 	      			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
       			</div>
			</div>
		</div>
	{{ Form::close() }}
</div>

@stop
@extends('layouts.master')

@section('title')
@parent
| Instructing
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Admin - Instructing - Recommend OTS</h2>
    </div>
</div>

<div class="container">
	{{ Form::open(['action' => 'MentorController@saveOTSReq']) }}
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
       			    {{Form::label('controller', 'Controller:', ['class'=>'control-label'])}}
                	{{Form::select('controller', $user, null, ['class'=>'form-control'])}}
       			</div>
       		</div>
       		<div class="col-sm-6">
		       	<div class="form-group">
		       		{{Form::label('position', 'Position:', ['class'=>'control-label'])}}
		            {{Form::select('position', TrainingRequest::$PosReq, 1, ['class'=>'form-control'])}}
		       	</div>
		    </div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
 	      			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
       			</div>
			</div>
		</div>
	{{ Form::close() }}
</div>

@stop
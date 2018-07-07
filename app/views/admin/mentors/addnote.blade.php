@extends('layouts.master')

@section('title')
@parent
| Instructing
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Admin - Instructing - Add Training Note</h2>
    </div>
</div>

<div class="container">
	{{ Form::open(['action' => 'MentorController@saveNote']) }}
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
       			    {{Form::label('controller_id', 'Controller:', ['class'=>'control-label'])}}
                    {{Form::select('controller_id', $user, null, ['class'=>'form-control'])}}
       			</div>
       		</div>
       		<div class="col-sm-4">
       			<div class="form-group">
		       		{{Form::label('position', 'Position:', ['class'=>'control-label'])}}
		            {{Form::select('position', TrainingNote::$SesPos, 1, ['class'=>'form-control'])}}
		       	</div>
		    </div>
		    <div class="col-sm-4">
       			<div class="form-group">
		       		{{Form::label('type', 'Session Type:', ['class'=>'control-label'])}}
		            {{Form::select('type', TrainingNote::$SesType, 1, ['class'=>'form-control'])}}
		       	</div>
		    </div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
		       		{{Form::label('date', 'Date:', ['class'=>'control-label'])}}
			       		<div class="input-group date" id="date">
			       		{{Form::text('date', null, ['class'=>'form-control'])}}
			       		<span class="input-group-addon">
			       			<i class="fa fa-calendar"></i>
		       			</span>
		       		</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
		       		{{Form::label('session_begin', 'Start Time:', ['class'=>'control-label'])}}
		            {{Form::select('session_begin', TrainingNote::$TimeStart, 1, ['class'=>'form-control'])}}
		        </div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
		       		{{Form::label('duration', 'Duration (mins):', ['class'=>'control-label'])}}
		            {{Form::text('duration', null, ['class'=>'form-control'])}}
		        </div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
		       		{{Form::label('comments', 'Comments and Notes:', ['class'=>'control-label'])}}
		            {{Form::textarea('comments', null, ['class'=>'form-control'])}}
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

		<script>
            $(function () {
            	var dtpOptions = {
                	icons: {
	                    time: "fa fa-clock-o",
	                    date: "fa fa-calendar",
	                    up: "fa fa-arrow-up",
	                    down: "fa fa-arrow-down"
	                },
	                format: 'YYYY-MM-DD'
                };

                $('#date').datetimepicker(dtpOptions);
                
                $('#date').on('dp.change', function(e) {
                	$("#date").data('DateTimePicker').maxDate(e.date);
                });
            });
        </script>

@stop
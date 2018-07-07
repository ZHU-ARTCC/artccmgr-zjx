@extends('layouts.master')

@section('title')
@parent
| Events
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Events - Admin - Create</h2>
    </div>
</div>
    
    <div class="container">
       {{ Form::open(['action' => 'EventController@store']) }}
       		<div class="row">
       			<div class="col-sm-12">
		       		<div class="form-group">
		       			{{Form::label('title', 'Event Title:', ['class'=>'control-label'])}}
		                {{Form::text('title', null, ['class'=>'form-control'])}}
		       		</div>
		       	</div>
		    </div>
		    <div class="row">
		    	<div class="col-sm-12">
		       		<div class="form-group">
		       			{{Form::label('description', 'Event Description:', ['class'=>'control-label'])}}
		                {{Form::hidden('description', null)}}
		                @include('partials.quill', ['id' => 'description'])
		       		</div>
		       	</div>
	       	</div>
       		<div class="row">
	       		<div class="col-sm-6">
		       		<div class="form-group">
		       			{{Form::label('start', 'Event Start Time:', ['class'=>'control-label'])}}
		       			<div class="input-group date" id="start-date">
		       				{{Form::text('event_start', null, ['class'=>'form-control'])}}
		       				<span class="input-group-addon">
		       					<i class="fa fa-calendar"></i>
		       				</span>
		       			</div>
		       		</div>
		       	</div>
		       	<div class="col-sm-6">
		       		<div class="form-group">
		       			{{Form::label('end', 'Event End Time:', ['class'=>'control-label'])}}
		       			<div class="input-group date" id="end-date">
		       				{{Form::text('event_end', null, ['class'=>'form-control'])}}
		       				<span class="input-group-addon">
		       					<i class="fa fa-calendar"></i>
		       				</span>
		       			</div>
		       		</div>
	       		</div>
	       	</div>
	       	<div class="row">
		       	<div class="col-sm-4">
			       	<div class="form-group">
		       			{{Form::label('banner_link', 'Banner Link:', ['class'=>'control-label'])}}
		                {{Form::text('banner_link', null, ['class'=>'form-control'])}}
		       		</div>
		       	</div>
		       	<div class="col-sm-4">
		       		<div class="form-group">
		                {{Form::label('host', 'Host ARTCC/Facility:', ['class'=>'control-label'])}}
		                {{Form::select('host', Events::$HostLong, 'ZHU', ['class' => 'form-control'])}}
		            </div>
		        </div>
		        <div class="col-sm-4">
		        	<div class="form-group">
		                {{Form::label('defaultpos', 'Default Positions:', ['class'=>'control-label'])}}
		                {{Form::select('defaultpos', Events::$DefaultPos, 'null', ['class' => 'form-control'])}}
		            </div>
		        </div>
	        </div>

	        <div class="row">
		        <div class="col-sm-12">
		       		<div class="form-group">
		       			{{Form::submit('Submit', ['class' => 'btn btn-primary btn-block'])}}
		       		</div>
	       		</div>
	       	</div>

       {{ Form::close() }}

       <script>
            $(function () {
            	var dtpOptions = {
                	icons: {
	                    time: "fa fa-clock-o",
	                    date: "fa fa-calendar",
	                    up: "fa fa-arrow-up",
	                    down: "fa fa-arrow-down"
	                },
	                format: 'MM/DD/YYYY H:mm'
                };

                $('#start-date').datetimepicker(dtpOptions);
                $('#end-date').datetimepicker(dtpOptions);
            });
       </script>
    </div>

@stop

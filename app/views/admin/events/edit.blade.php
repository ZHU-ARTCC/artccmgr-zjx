@extends('layouts.master')

@section('title')
@parent
| Events
@stop

@section('content')

<div class="page-heading-two">
		<div class="container">
				<h2>Events - Admin - Edit</h2>
		</div>
</div>
		
<div class="container">
	 {{ Form::open(['action' => ['EventController@update', $event->id], 'method' => 'PUT']) }}
			<div class="col-sm-12">
				<div class="form-group">
					{{Form::label('title', 'Event Title:', ['class'=>'control-label'])}}
					{{Form::text('title', $event->title, ['class'=>'form-control'])}}
				</div>
				<div class="form-group">
					{{Form::label('description', 'Event Description:', ['class'=>'control-label'])}}
					{{Form::hidden('description', $event->description)}}
					@include('partials.quill', ['id' => 'description'])
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					{{Form::label('event_start', 'Event Start Time:', ['class'=>'control-label'])}}
					<div class="input-group date" id="start-date">
						{{Form::text('event_start', $event->event_start->format('m/d/Y H:i'), ['class'=>'form-control'])}}
						<span class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					{{Form::label('event_end', 'Event End Time:', ['class'=>'control-label'])}}
					<div class="input-group date" id="end-date">
						{{Form::text('event_end', $event->event_end->format('m/d/Y H:i'), ['class'=>'form-control'])}}
						<span class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					{{Form::label('banner_link', 'Banner Link:', ['class'=>'control-label'])}}
					{{Form::text('banner_link', $event->banner_link, ['class'=>'form-control'])}}
				</div>
				<div class="form-group">
					{{Form::label('host', 'Host ARTCC/Facility:', ['class'=>'control-label'])}}
					{{Form::select('host', Events::$HostLong, $event->host, ['class' => 'form-control'])}}
				</div>
			</div>

			<div class="col-sm-12">
				<div class="form-group">
					{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
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

				$('#start-date').on('dp.change', function(e) {
					$("#end-date").data('DateTimePicker').minDate(e.date);
				});

				$('#end-date').on('dp.change', function(e) {
					$("#start-date").data('DateTimePicker').maxDate(e.date);
				});

		});
	 </script>

</div>

@stop

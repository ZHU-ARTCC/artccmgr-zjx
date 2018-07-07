@extends('layouts.master')

@section('title')
@parent
| Event
@stop

@section('content')

<div class="page-heading-two">
	<div class="container">
		<h2>Event - Admin - View</h2>
	</div>
</div>

@if($event)    
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<h4><img width="100%" src="{{{$event->banner_link}}}"></h4>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">{{{$event->title}}}</h3>
				</div>
				<div class="panel-body">
					<h4 style="display:inline-block;">Host ARTCC:</h4> <h4 style="display:inline-block;">{{{$event->host_long}}}</h4><br />
					<h4 style="display:inline-block;">Event Date:</h4> <h4 style="display:inline-block;">{{{$event->event_start}}}z - {{{$event->event_end}}}z</h4>
					<h4><strong>Event Description</strong></h4>
					<p>{{$event->description}}</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Event Positions</h3>
				</div>
<div class="panel-body">
<a class="btn btn-success btn-sm" data-toggle="modal" data-target="#add-position">Add Position</a><br />
</div>

				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped available-positions">
							<thead>
								<tr>
									<th width="20%">Position</th>
									<th width="60%">Controller</th>
									<th width="20%">Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($event->positions->sortBy('order_index') as $position)
								<tr data-id="{{ $position->id }}">
									<td>{{$position->name}}</td>
									<td>{{$position->user ? $position->user->full_name : "No Assignment"}}</td>
									<td>
										{{ Form::open(['action' => ['EventController@deletePosition', $event->id, $position->id], 'method' => 'DELETE', 'style' => 'display: inline-block;']) }}
										<button type="submit" class="btn btn-danger btn-sm btn-addon simple-tooltip" title="Remove Position"><i class="fa fa-times"></i></button>
										{{ Form::close() }}
										@if(!$position->controller_id == null)
										{{ Form::open(['action' => ['EventController@unassignPosition', $event->id, $position->id], 'method' => 'POST', 'style' => 'display: inline-block;']) }}
										<button type="submit" class="btn btn-warning btn-sm btn-addon simple-tooltip" title="Unassign Controller"><i class="fa fa-ban"></i></button>
										{{ Form::close() }}
										@endif
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<a class="btn btn-success btn-sm" data-toggle="modal" data-target="#add-position">Add Position</a><br />
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th width="50%">Controller</th>
									<th width="30">Position</th>
									<th width="20%">Actions</th>
								</tr>
							</thead>
							<tbody>
								@forelse($pos_req as $p)
								<tr>
									<td>{{$p->user->full_name}}</td>
									<td>{{$p->eventPosition->name}}</td>
									<td> {{ Form::open(['action' => ['EventController@assignPosition', $p->position_id, $p->user->id], 'method' => 'POST', 'style' => 'display: inline-block;']) }}
									<button class="btn btn-success btn-sm btn-addon simple-tooltip" title="Accept Position"><i class="fa fa-check"></i></button>{{ Form::close() }} {{ Form::open(['action' => ['EventController@deleteRequest', $p->id], 'method' => 'DELETE', 'style' => 'display: inline-block;']) }}
									<button class="btn btn-danger btn-sm btn-addon simple-tooltip" title="Delete Request"><i class="fa fa-times"></i></button>{{ Form::close() }}
									</td>
								</tr>
								@empty
								<tr>
									<td colspan="3">No Position Requests</td>
								</tr>
								@endforelse
							</tbody>
						</table>
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
                            <thead>
                                <tr>
                                    <th span=2>Direct Assignment</th>
                                </tr>
                            </thead>
                                {{ Form::open(['action' => ['EventController@assignPositionMan'], 'method' => 'POST', 'style' => 'display: inline-block;']) }}
                            <tr>
                                <td>Position:</td>
                                <td><div class="form-group">{{ Form::select('position_id', $available_positions, null, ['class'=>'form-control']) }}</div></td>
                            </tr>
                            <tr>

                            <td>Controller:</td>
                            <td>
                                <div class="form-group">{{ Form::select('controller_id', $user, null, ['class'=>'form-control']) }}</div></td>
                            </tr>
                            <tr>
                                <td><button type="submit" class="btn btn-success">Submit</button></td>
                                <td>&nbsp;</td>
                            </tr>
                            {{ Form::close() }}
                            </table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="add-position">
	{{ Form::open(['action' => ['EventController@createPosition', $event->id], 'method' => 'POST']) }}
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Add Position</h4>
		  </div>
		  <div class="modal-body">
			
			<div class="form-group">
				<label for="position">Position</label>
				<input id="position" name="name" type="text" class="form-control" />
			</div>
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Create</button>
		  </div>
		</div>
	  </div>
  {{ Form::close() }}
</div>

<script>
var fixHelper = function(e, ui) {
	ui.children().each(function() {
		$(this).width($(this).width());
	});
	return ui;
};

$(".available-positions tbody").sortable({
	helper: fixHelper
}).disableSelection();

$(".available-positions tbody").on('sortstop', function(e, ui){
	var new_order = [];

	$(".available-positions tbody tr").each(function(i, row){
		new_order.push({
			id: $(row).data('id'),
			order_index: i
		});
	});

	$.post('/admin/events/{{ $event->id }}/sort_positions', JSON.stringify(new_order), function(r){
		console.log("Successfully resorted the positions");
	}, 'json');
})
</script>

@else
<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>NO EVENT FOUND</h3>
			</div>
		</div>
	</div>
@endif


@stop

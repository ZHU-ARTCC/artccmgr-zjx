@extends('layouts.master')

@section('title')
@parent
| Comms
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>ATIS Communications - Admin</h2>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<a type="button" class="btn btn-success" data-toggle="modal" data-target="#add-position">Add ATIS</a>
			<p></p>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="20%">Identifier</th>
							<th width="20%">Name</th>
							<th width="20%">Frequency</th>
							<th width="20%">Facility</th>
							<th width="20%">Actions</th>
						</tr>
					</thead>
					<tbody>
					@forelse ($atis as $c)
					<tr>
						<td>{{{$c->position}}}</td>
						<td>{{{$c->name}}}</td>
						<td>{{{$c->frequency}}}</td>
						<td>{{{$c->facility_long}}}</td>
						<td>
							<a data-toggle="modal" data-target="#editModal-{{$c->id}}" class="btn btn-primary btn-sm simple-tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
							{{Form::open(['action'=>['CommsController@destroyATIS', $c->id], 'method' => 'delete', 'style' => 'display: inline-block'])}}
								<button type="submit" class="btn btn-danger btn-sm simple-tooltip" title="Delete"><i class="fa fa-times"></i></button>
							{{Form::close()}}

							<div class="modal fade" id="editModal-{{$c->id}}">
                                    <div class="modal-dialog">
                                            <div class="modal-content">
                                            {{Form::open(['action'=>['CommsController@updateATIS', $c->id]])}}
												<div class="modal-header">
                                                    <h4 class="modal-title">Edit ATIS</h4>
                                                </div>
                                                <div class="modal-body">
											      	<div class="form-group">
														{{Form::label('position', 'Position:', ['class'=>'control-label'])}}
														{{Form::text('position', $c->position, ['class'=>'form-control'])}}
													</div>
													<div class="form-group">
														{{Form::label('name', 'Position Name:', ['class'=>'control-label'])}}
														{{Form::text('name', $c->name, ['class'=>'form-control'])}}
													</div>
											      	<div class="form-group">
														{{Form::label('frequency', 'Frequency:', ['class'=>'control-label'])}}
														{{Form::text('frequency', $c->frequency, ['class'=>'form-control'])}}
													</div>
													<div class="form-group">
														{{Form::label('facility', 'Facility:', ['class'=>'control-label'])}}
														{{Form::select('facility', ATIS::$FacilityLong, $c->facility, ['class'=>'form-control'])}}
													</div>
											    </div>
											    <div class="modal-footer">
											        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											        <button type="submit" class="btn btn-primary">Edit Position</button>
											    </div>
											{{ Form::close() }}
                                        	</div>
                                    </div>
                            </div>
						</td>
					</tr>
					@empty
                    <tr>
                        <td colspan="6"><center>No Positions  To Show</center></td>
                    </tr>
                    @endforelse
		            </tbody>
		        </table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="add-position">
	{{ Form::open(['action'=>'CommsController@storeATIS'])}}
	<div class="modal-dialog">
	    <div class="modal-content">
	    	<div class="modal-header">
	        	<h4 class="modal-title">Add ATIS</h4>
	      	</div>
	   		<div class="modal-body">
		      	<div class="form-group">
					{{Form::label('position', 'Position:', ['class'=>'control-label'])}}
					{{Form::text('position', null, ['class'=>'form-control'])}}
				</div>
				<div class="form-group">
					{{Form::label('name', 'Position Name:', ['class'=>'control-label'])}}
					{{Form::text('name', null, ['class'=>'form-control'])}}
				</div>
		      	<div class="form-group">
					{{Form::label('frequency', 'Frequency:', ['class'=>'control-label'])}}
					{{Form::text('frequency', null, ['class'=>'form-control'])}}
				</div>
				<div class="form-group">
					{{Form::label('facility', 'Facility:', ['class'=>'control-label'])}}
					{{Form::select('facility', ATIS::$FacilityLong, 1, ['class'=>'form-control'])}}
				</div>
		    </div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Add ATIS</button>
		    </div>
	    </div>
	</div>
  	{{ Form::close() }}
</div>

@stop

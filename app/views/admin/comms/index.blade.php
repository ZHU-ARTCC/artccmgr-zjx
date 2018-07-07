@extends('layouts.master')

@section('title')
@parent
| Comms
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Communications - Admin</h2>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<a type="button" class="btn btn-success" data-toggle="modal" data-target="#add-position">Add Position</a>
			<p></p>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="10%">Identifier</th>
							<th width="10%">Relief</th>
							<th width="22%">Name</th>
							<th width="10%">Frequency</th>
							<th width="20%">Facility</th>
							<th width="8%">POF Ident</th>
							<th width="10%">ASSR Range</th>
							<th width="10%">Actions</th>
						</tr>
					</thead>
					<tbody>
					@forelse ($comms as $c)
					<tr>
						<td>{{{$c->position}}}</td>
						<td>{{{$c->relief}}}</td>
						<td>{{{$c->name}}}</td>
						<td>{{{$c->frequency}}}</td>
						<td>{{{$c->facility_long}}}</td>
						<td>{{{$c->pofid}}}</td>
						<td>{{{$c->sqstart}}} - {{{$c->sqend}}}</td>
						<td>
							<a data-toggle="modal" data-target="#editModal-{{$c->id}}" class="btn btn-primary btn-sm simple-tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
							{{Form::open(['action'=>['CommsController@destroy', $c->id], 'method' => 'delete', 'style' => 'display: inline-block'])}}
								<button type="submit" class="btn btn-danger btn-sm simple-tooltip" title="Delete"><i class="fa fa-times"></i></button>
							{{Form::close()}}

							<div class="modal fade" id="editModal-{{$c->id}}">
                                    <div class="modal-dialog">
                                            <div class="modal-content">
                                            {{Form::open(['action'=>['CommsController@update', $c->id], 'method' => 'PUT'])}}
												<div class="modal-header">
                                                    <h4 class="modal-title">Edit Position</h4>
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
														{{Form::label('relief', 'Relief:', ['class'=>'control-label'])}}
														{{Form::text('relief', $c->relief, ['class'=>'form-control'])}}
													</div>
											      	<div class="form-group">
														{{Form::label('facility', 'Facility:', ['class'=>'control-label'])}}
														{{Form::select('facility', Comms::$FacilityLong, $c->facility, ['class'=>'form-control'])}}
													</div>
													<div class="form-group">
														{{Form::label('frequency', 'Frequency:', ['class'=>'control-label'])}}
														{{Form::text('frequency', $c->frequency, ['class'=>'form-control'])}}
													</div>
													<div class="form-group">
														{{Form::label('pofid', 'Sector ID:', ['class'=>'control-label'])}}
														{{Form::text('pofid', $c->pofid, ['class'=>'form-control'])}}
													</div>
													<div class="form-group">
														{{Form::label('sqstart', 'ASSR Range Start:', ['class'=>'control-label'])}}
														{{Form::text('sqstart', $c->sqstart, ['class'=>'form-control'])}}
													</div>
													<div class="form-group">
														{{Form::label('sqend', 'ASSR Range End:', ['class'=>'control-label'])}}
														{{Form::text('sqend', $c->sqend, ['class'=>'form-control'])}}
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
	{{ Form::open(['action'=>'CommsController@store'])}}
	<div class="modal-dialog">
	    <div class="modal-content">
	    	<div class="modal-header">
	        	<h4 class="modal-title">Add Position</h4>
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
					{{Form::label('facility', 'Facility:', ['class'=>'control-label'])}}
					{{Form::select('facility', Comms::$FacilityLong, 1, ['class'=>'form-control'])}}
				</div>
				<div class="form-group">
					{{Form::label('frequency', 'Frequency:', ['class'=>'control-label'])}}
					{{Form::text('frequency', null, ['class'=>'form-control'])}}
				</div>
				<div class="form-group">
					{{Form::label('pofid', 'Sector ID:', ['class'=>'control-label'])}}
					{{Form::text('pofid', null, ['class'=>'form-control'])}}
				</div>
		    </div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Add Position</button>
		    </div>
	    </div>
	</div>
  	{{ Form::close() }}
</div>

@stop

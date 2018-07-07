@extends('layouts.master')

@section('title')
@parent
| Instructing
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Admin - Instructing - Files</h2>
    </div>
</div>

<div class="container">
	<a type="button" class="btn btn-success" href="/admin/mentor/files/create">Add File</a> 
	<p></p>
		<ul class="nav nav-tabs nav-justified">
			<li class="active"><a data-toggle="tab" href="#twr">TWR Trainer</a></li>
	  		<li><a data-toggle="tab" href="#ac">AC Sim</a></li>
			<li><a data-toggle="tab" href="#diag">Training Diagrams</a></li>
	  	</ul>
	  	<div class="tab-content">
		    <div id="twr" class="tab-pane fade in active">
		        <br />
		        <div class="row">
			        <div class="col-sm-12">
						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
									    <th width="20%">Name</th>
									    <th width="40%">Description</th>
									    <th width="25%">Updated</th>
										<th width="15%">Actions</th>
									</tr>
								</thead>
								<tbody>
								@forelse ($twr as $t)
									<tr>
										<td>{{{$t->name}}}</td>
									    @if(empty($t->comments))
									    <td>No Description Available</td>
									    @else
									    <td>{{{$t->comments}}}</td>
									    @endif
									    <td>{{{$t->updated_at}}} z</td>
									    <td>
									    	<a href="{{ $t->url }}" target="_blank" class="btn btn-success btn-sm simple-tooltip" data-toggle="tooltip" title="Download"><i class="fa fa-download"></i></a>
									    	<a href="/admin/mentor/files/{{$t->id}}/edit" class="btn btn-primary btn-sm simple-tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
									    	{{Form::open(['action'=>['TrainingFilesController@destroy', $t->id], 'method' => 'DELETE', 'style' => 'display: inline-block'])}}
									    		<button type="submit" class="btn btn-danger btn-sm simple-tooltip" title="Delete"><i class="fa fa-times"></i></button>
									    	{{Form::close()}}
									    </td>
									</tr>
								@empty
                                    <tr>
                                      <td colspan="4"><center>No Documents To Show</center></td>
                                    </tr>
                                @endforelse
		                    	</tbody>
		                    </table>
						</div>
			        </div>
			    </div>
		    </div>
		    <div id="ac" class="tab-pane fade in">
		        <br />
		        <div class="row">
			        <div class="col-sm-12">
						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
									    <th width="20%">Name</th>
									    <th width="40%">Description</th>
									    <th width="25%">Updated</th>
										<th width="15%">Actions</th>
									</tr>
								</thead>
								<tbody>
								@forelse ($ac as $a)
									<tr>
										<td>{{{$a->name}}}</td>
									    @if(empty($a->comments))
									    <td>No Description Available</td>
									    @else
									    <td>{{{$a->comments}}}</td>
									    @endif
									    <td>{{{$a->updated_at}}} z</td>
									    <td>
									    	<a href="{{ $a->url }}" target="_blank" class="btn btn-success btn-sm simple-tooltip" data-toggle="tooltip" title="Download"><i class="fa fa-download"></i></a>
									    	<a href="/admin/mentor/files/{{$a->id}}/edit" class="btn btn-primary btn-sm simple-tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
									    	{{Form::open(['action'=>['TrainingFilesController@destroy', $a->id], 'method' => 'DELETE', 'style' => 'display: inline-block'])}}
									    		<button type="submit" class="btn btn-danger btn-sm simple-tooltip" title="Delete"><i class="fa fa-times"></i></button>
									    	{{Form::close()}}
									    </td>
									</tr>
								@empty
                                    <tr>
                                      <td colspan="4"><center>No Documents To Show</center></td>
                                    </tr>
                                @endforelse
		                    	</tbody>
		                    </table>
						</div>
			        </div>
			    </div>
		    </div>
		    <div id="diag" class="tab-pane fade in">
		        <br />
		        <div class="row">
			        <div class="col-sm-12">
						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
									    <th width="20%">Name</th>
									    <th width="40%">Description</th>
									    <th width="25%">Updated</th>
										<th width="15%">Actions</th>
									</tr>
								</thead>
								<tbody>
								@forelse ($diag as $d)
									<tr>
										<td>{{{$d->name}}}</td>
									    @if(empty($d->comments))
									    <td>No Description Available</td>
									    @else
									    <td>{{{$d->comments}}}</td>
									    @endif
									    <td>{{{$d->updated_at}}} z</td>
									    <td>
									    	<a href="{{ $d->url }}" target="_blank" class="btn btn-success btn-sm simple-tooltip" data-toggle="tooltip" title="Download"><i class="fa fa-download"></i></a>
									    	<a href="/admin/mentor/files/{{$d->id}}/edit" class="btn btn-primary btn-sm simple-tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
									    	{{Form::open(['action'=>['TrainingFilesController@destroy', $d->id], 'method' => 'DELETE', 'style' => 'display: inline-block'])}}
									    		<button type="submit" class="btn btn-danger btn-sm simple-tooltip" title="Delete"><i class="fa fa-times"></i></button>
									    	{{Form::close()}}
									    </td>
									</tr>
								@empty
                                    <tr>
                                      <td colspan="4"><center>No Documents To Show</center></td>
                                    </tr>
                                @endforelse
		                    	</tbody>
		                    </table>
						</div>
			        </div>
			    </div>
		    </div>
		</div>
	</div>

@stop

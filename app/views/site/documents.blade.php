@extends('layouts.master')

@section('title')
@parent
| Documents
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Documents</h2>
    </div>
</div>

<div class="container">
		<ul class="nav nav-tabs nav-justified">
			<li class="active"><a data-toggle="tab" href="#vrc">VRC</a></li>
	  		<li><a data-toggle="tab" href="#vstars">vSTARS</a></li>
	  		<li><a data-toggle="tab" href="#veram">vERAM</a></li>
	  		<li><a data-toggle="tab" href="#vatis">vATIS</a></li>
			<li><a data-toggle="tab" href="#sop">SOPs</a></li>
	  		<li><a data-toggle="tab" href="#loa">LOAs</a></li>	
	  	</ul>
	  	<div class="tab-content">
		    <div id="vrc" class="tab-pane fade in active">
		        <br />
		        <div class="row">
			        <div class="col-sm-12">
						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
									    <th width="22%">Name</th>
									    <th width="53%">Description</th>
									    <th width="15%">Updated</th>
										<th width="10%">Actions</th>
									</tr>
								</thead>
								<tbody>
								@forelse ($vrc as $v)
									<tr>
										<td>{{{$v->name}}}</td>
									    @if(empty($v->comments))
									    <td>No Description Available</td>
									    @else
									    <td>{{{$v->comments}}}</td>
									    @endif
									    <td>{{{$v->updated_at}}} z</td>
									    <td><a href="{{ $v->url }}" target="_blank" class="btn btn-success btn-sm simple-tooltip" data-toggle="tooltip" title="Download"><i class="fa fa-download"></i></a></td>
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
		    <div id="vstars" class="tab-pane fade in">
		        <br />
		        <div class="row">
			        <div class="col-sm-12">
						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
									    <th width="22%">Name</th>
									    <th width="53%">Description</th>
									    <th width="15%">Updated</th>
										<th width="10%">Actions</th>
									</tr>
								</thead>
								<tbody>
							</tr>
								@forelse ($vstars as $vs)
									<tr>
										<td>{{{$vs->name}}}</td>
									    @if(empty($vs->comments))
									    <td>No Description Available</td>
									    @else
									    <td>{{{$vs->comments}}}</td>
									    @endif
									    <td>{{{$vs->updated_at}}} z</td>
									    <td><a href="{{ $vs->url }}" target="_blank" class="btn btn-success btn-sm simple-tooltip" data-toggle="tooltip" title="Download"><i class="fa fa-download"></i></a></td>
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
		    <div id="veram" class="tab-pane fade in">
		        <br />
		        <div class="row">
			        <div class="col-sm-12">
						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
									    <th width="22%">Name</th>
									    <th width="53%">Description</th>
									    <th width="15%">Updated</th>
										<th width="10%">Actions</th>
									</tr>
								</thead>
								<tbody>
							</tr>
								@forelse ($veram as $ver)
									<tr>
										<td>{{{$ver->name}}}</td>
									    @if(empty($ver->comments))
									    <td>No Description Available</td>
									    @else
									    <td>{{{$ver->comments}}}</td>
									    @endif
									    <td>{{{$ver->updated_at}}} z</td>
									    <td><a href="{{ $ver->url }}" target="_blank" class="btn btn-success btn-sm simple-tooltip" data-toggle="tooltip" title="Download"><i class="fa fa-download"></i></a></td>
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
		    <div id="vatis" class="tab-pane fade in">
		        <br />
		        <div class="row">
			        <div class="col-sm-12">
						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
									    <th width="22%">Name</th>
									    <th width="53%">Description</th>
									    <th width="15%">Updated</th>
										<th width="10%">Actions</th>
									</tr>
								</thead>
								<tbody>
								@forelse ($vatis as $va)
									<tr>
										<td>{{{$va->name}}}</td>
									    @if(empty($va->comments))
									    <td>No Description Available</td>
									    @else
									    <td>{{{$va->comments}}}</td>
									    @endif
									    <td>{{{$va->updated_at}}} z</td>
									    <td><a href="{{ $va->url }}" target="_blank" class="btn btn-success btn-sm simple-tooltip" data-toggle="tooltip" title="Download"><i class="fa fa-download"></i></a></td>
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
		    <div id="sop" class="tab-pane fade in">
		        <br />
		        <div class="row">
			        <div class="col-sm-12">
						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
									    <th width="22%">Name</th>
									    <th width="53%">Description</th>
									    <th width="15%">Updated</th>
										<th width="10%">Actions</th>
									</tr>
								</thead>
								<tbody>
								@forelse ($sop as $s)
									<tr>
										<td>{{{$s->name}}}</td>
									    @if(empty($s->comments))
									    <td>No Description Available</td>
									    @else
									    <td>{{{$s->comments}}}</td>
									    @endif
									    <td>{{{$s->updated_at}}} z</td>
									    <td><a href="{{ $s->url }}" target="_blank" class="btn btn-success btn-sm simple-tooltip" data-toggle="tooltip" title="Download"><i class="fa fa-download"></i></a></td>
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
		    <div id="loa" class="tab-pane fade in">
		        <br />
		        <div class="row">
			        <div class="col-sm-12">
						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
									    <th width="22%">Name</th>
									    <th width="53%">Description</th>
									    <th width="15%">Updated</th>
										<th width="10%">Actions</th>
									</tr>
								</thead>
								<tbody>
								@forelse ($loa as $l)
									<tr>
										<td>{{{$l->name}}}</td>
									    @if(empty($l->comments))
									    <td>No Description Available</td>
									    @else
									    <td>{{{$l->comments}}}</td>
									    @endif
									    <td>{{{$l->updated_at}}} z</td>
									    <td><a href="{{ $l->url }}" target="_blank" class="btn btn-success btn-sm simple-tooltip" data-toggle="tooltip" title="Download"><i class="fa fa-download"></i></a></td>
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

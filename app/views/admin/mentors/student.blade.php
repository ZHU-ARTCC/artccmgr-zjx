@extends('layouts.master')

@section('title')
@parent
| Instructing
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Admin - Instructing - Student Notes</h2>
    </div>
</div>
	
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h4>{{{$user->full_name}}} - {{{$user->rating_long}}}</h4>
		</div>
	</div>
	<div class="row">	
		<div class="col-sm-3">
			<div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th width="40%">Delivery</th>
                        <th width="60%">{{{$user->del_cert}}}</th>
                    </tr>
                    <tr>
                        <th width="40%">Ground</th>
                        <th width="60%">{{{$user->gnd_cert}}}</th>
                    </tr>
                    <tr>
                        <th width="40%">Tower</th>
                        <th width="60%">{{{$user->twr_cert}}}</th>
                    </tr>
                    <tr>
                        <th width="40%">Approach</th>
                        <th width="60%">{{{$user->app_cert}}}</th>
                    </tr>
                    <tr>
                        <th width="40%">Center</th>
                        <th width="60%">{{{$user->ctr_cert}}}</th>
                    </tr>
				</table>
            </div>
		</div>
		<div class="col-sm-9">
			<ul class="nav nav-tabs nav-justified">
				<li class="active"><a data-toggle="tab" href="#notes">Training Notes</a></li>
		  		<li><a data-toggle="tab" href="#exams">Exams</a></li>
	  		</ul>
	  		<div class="tab-content">
		    	<div id="notes" class="tab-pane fade-in active">
			        <div class="table-responsive">
	                <table class="table table-bordered">
		                <thead>    
		                    <tr>
		                        <th width="20%">Date</th>
		                        <th width="15%">Position</th>
		                        <th width="20%">Instructor</th>
		                        <th width="15%">Type</th>
		                        <th width="10%">Actions</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@forelse($note as $n)
		                	<tr>
		                		<td>{{{$n->date}}} - {{{$n->session_begin}}}</td>
		                		<td>{{{$n->ses_pos}}}</td>
		                		<td>{{{$n->instructor->full_name}}}</td>
		                		<td>{{{$n->ses_type}}}</td>
		                		<td><a href="/admin/mentor/note/{{{$n->id}}}" class="btn btn-success btn-sm simple-tooltip" title="View Details"><i class="fa fa-info-circle"></i></a></td>
		                	</tr>
		                	@empty
		                	<tr>
		                		<td colspan="6"><center>No Session Notes Available</center></td>
		                	</tr>
		                	@endforelse
		                </tbody>
					</table>
            		</div>
				</div>
				<div id="exams" class="tab-pane fade-in">
			        <div class="table-responsive">
	                <table class="table table-bordered">
		                <thead>    
		                    <tr>
		                        <th width="25%">Exam Assigned</th>
								<th width="25%">Assigned By</th>
								<th width="30%">Assigned On</th>
								<th width="20%">Passed?</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@forelse($exam as $e)
			                	@if($e->complete == 1)
			                	<tr>
									<td>{{{$e->ass_exam}}}</td>
									<td>{{{$e->instructor->full_name}}}</td>
									<td>{{{$e->created_at}}}</td>
									<td>{{{$e->pass_rate}}}</td>
								</tr>
								@elseif($e->complete == 0)
								<tr>
									<td>{{{$e->ass_exam}}}</td>
									<td>{{{$e->instructor->full_name}}}</td>
									<td>{{{$e->created_at}}}</td>
									<td>Not Yet Taken</td>
								</tr>
								@endif
		                	@empty
		                	<tr>
		                		<td colspan="4"><center>No Exam History Available</center></td>
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

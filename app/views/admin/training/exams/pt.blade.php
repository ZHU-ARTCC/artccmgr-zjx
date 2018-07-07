@extends('layouts.master')

@section('title')
@parent
| Training
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Training - Pending Theory Exams</h2>
    </div>
</div>
    
<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<h4>Assigned Exams</h4>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="25%">Exam Assigned</th>
							<th width="30%">Assigned By</th>
							<th width="30%">Assigned On</th>
							<th width="15%">Actions</th>
						</tr>
					</thead>
					<tbody>
						@forelse($awaitingexams as $a)
						<tr>
							<td>{{{$a->ass_exam}}}</td>
							<td>{{{$a->instructor->full_name}}}</td>
							<td>{{{$a->created_at}}}</td>
							<td><a class="btn btn-success btn-sm simple-tooltip" title="Take Exam"><i class="fa fa-pencil"></i></a></td>
						</tr>
						@empty
						<tr>
							<td colspan="4"><center>No Exams Waiting to be Taken</center></td>
						</tr>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

@stop
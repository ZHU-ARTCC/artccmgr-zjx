@extends('layouts.master')

@section('title')
@parent
| Training
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Training - Completed Theory Exams</h2>
    </div>
</div>
    
<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<h4>Completed Exams</h4>
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
						@forelse($completedexams as $c)
						<tr>
							<td>{{{$c->ass_exam}}}</td>
							<td>{{{$c->instructor->full_name}}}</td>
							<td>{{{$c->created_at}}}</td>
							<td>{{{$c->pass_rate}}}</td>
						</tr>
						@empty
						<tr>
							<td colspan="4"><center>No Exams Taken</center></td>
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

@extends('layouts.master')

@section('title')
@parent
| Training
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Training - Pending Practical Exams</h2>
    </div>
</div>
    
<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<h4>Pending Practical Exams</h4>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="35%">Exam</th>
							<th width="40%">Requested By</th>
							<th width="25%">Accepting Instructor</th>
						</tr>
					</thead>
					<tbody>
						@forelse($ots as $c)
						<tr>
							<td>{{{$c->pos_req}}}</td>
							<td>{{{$c->instructor->full_name}}}</td>
							@if($c->accepted === '0')
							<td>Not Accepted Yet</td>
							@else
							<td>{{{$c->mentor->full_name}}}</td>
							@endif
						</tr>
						@empty
						<tr>
							<td colspan="3"><center>No OTS's Scheduled</center></td>
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

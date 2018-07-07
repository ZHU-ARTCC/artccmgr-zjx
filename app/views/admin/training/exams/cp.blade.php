@extends('layouts.master')

@section('title')
@parent
| Training
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Training - Completed Practical Exams</h2>
    </div>
</div>
    
<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<h4>Completed Practical Exams</h4>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="35%">Exam</th>
							<th width="40%">OTS Taken</th>
							<th width="25%">Passed?</th>
						</tr>
					</thead>
					<tbody>
						@forelse($ots as $c)
						<tr>
							<td>{{{$c->pos_req}}}</td>
							<td>{{{$c->updated_at}}}</td>
							@if($c->pass === '1')
							<td>Failed</td>
							@elseif($c->pass === '2')
							<td>Passed</td>
							@endif
						</tr>
						@empty
						<tr>
							<td colspan="3"><center>No OTS's Taken</center></td>
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
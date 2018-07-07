@extends('layouts.master')

@section('title')
@parent
| Profile
@stop

@section('content')
@if($log)
<div class="page-heading-two">
	<div class="container">
		<h2>{{$user->full_name}} - Controller Log</h2>
	</div>
</div>
	
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h4 class="mb-md">Controller Logbook</h4>
				<div class="table-responsive">
					<table class="table table-bordered table-striped no-footer">
						<thead>
							<tr>
								<th width="30%">Position</th>
								<th width="30%">Date</th>
								<th width="40%">Duration</th>
							</tr>
						</thead>
						<tbody>
							@forelse($log as $l)
							<tr>
								<td>{{{$l->position}}}</td>
								<td>{{{$l->date}}}</td>
								<td>{{{$l->duration_time}}}</td>
							</tr>
						@empty
							<tr>
								<td colspan="3"><center>No Stats available for the User!</center></td>
							</tr>
						@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

@else
<div class="page-heading-two">
	<div class="container">
		<h2>No Valid CID For ZHU</h2>
	</div>
</div>
@endif
	
@stop

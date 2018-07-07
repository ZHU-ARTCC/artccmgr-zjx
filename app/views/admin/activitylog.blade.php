@extends('layouts.master')

@section('title')
@parent
| Activity Log
@stop

@section('content')

<div class="page-heading-two">
	<div class="container">
		<h2>Website Activity Log</h2>
	</div>
</div>
	
	
<div class="container">
	<div class="row" id="allLogs">
		<div class="col-sm-12">
			{{ $activity->links() }}
			<div class="table-responsive">
				<table class="table table-bordered table-striped no-footer">
					<thead>
						<tr>
							<th width="20%">Admin</th>
							<th width="50%">Message</th>
							<th width="30%">Logged</th>
						</tr>
					</thead>
					<tbody>
						@foreach($activity as $l)
						<tr>
							<td>{{ $l->User->full_name }}</td>
							<td>{{ $l->note }}</td>
							<td>{{ $l->created_at }} - {{ $l->created_at->diffForHumans() }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			{{ Form::select('filterUser', $users, null, ['class' => 'form-control', 'id' => 'filterUser']) }}
		</div>
	</div>
	<br />
	<div class="row" id="filteredLogs" style="display: none;">
		<div class="col-sm-12">
			<div class="table-responsive">
				<table class="table table-bordered table-striped no-footer" id="filterTable">
					<thead>
						<tr>
							<th width="20%">Admin</th>
							<th width="50%">Message</th>
							<th width="30%">Logged</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script src="/assets/js/activitylog.js"></script>

@stop
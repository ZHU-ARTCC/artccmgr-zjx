@extends('layouts.master')

@section('title')
@parent
| Feedback
@stop

@section('content')

<div class="page-heading-two">
	<div class="container">
		<h2>Feedback</h2>
	</div>
</div>
	
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<a type="button" class="btn btn-success" href="/feedback/create">Submit Feedback</a> 
			<p></p>
			<p></p>
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="7%"><center>Position</center></th>
							<th width="15%"><center>Controller</center></th>
							<th width="10%"><center>Service Level</center></th>
							<th width="23%"><center>Comments</center></th>
							<th width="23%"><center>Staff Comments</center></th>
							<th width="13%"><center>Submitted</center></th>
						</tr>
					</thead>
					<tbody>
						@if(Auth::check())
							@forelse($feedback as $h)
							<tr>
								@if(Auth::user()->can('instruct') || Auth::user()->can('snrstaff'))
									<td><a href="/feedback/{{$h->id}}">{{{$h->position}}}</a></td>
								@else
									<td>{{{$h->position}}}</td>
								@endif
								<td>{{{$h->controller->full_name}}}</td>
								<td>{{{$h->level_text}}}</td>
								<td><span class="simple-tooltip" title="{{$h->comments}}">{{ str_limit($h->comments, $limit = 40, $end = '...') }}</span></td>
								<td><span class="simple-tooltip" title="{{$h->staff_comments}}">{{ str_limit($h->staff_comments, $limit = 40, $end = '...') }}</span></td>
								<td>{{{$h->created_at}}}z</td>
							</tr>
							@empty
								<tr>
									<td colspan="6"><center>No Feedback</center></td>
								</tr>
							@endforelse
						@else
							@forelse($feedback as $h)
							<tr>
								<td>{{{$h->position}}}</td>
								<td>N/A</td>
								<td>{{{$h->level_text}}}</td>
								<td><span class="simple-tooltip" title="{{$h->comments}}">{{ str_limit($h->comments, $limit = 40, $end = '...') }}</span></td>
								<td><span class="simple-tooltip" title="{{$h->staff_comments}}">{{ str_limit($h->staff_comments, $limit = 40, $end = '...') }}</span></td>
								<td>{{{$h->created_at}}}z</td>
							</tr>
							@empty
							<tr>
								<td colspan="6"><center>No Feedback</center></td>
							</tr>
							@endforelse
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@stop

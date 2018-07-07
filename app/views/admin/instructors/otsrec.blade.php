@extends('layouts.master')

@section('title')
@parent
| Instructing
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Admin - Instructing - OTS Recommendations</h2>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="15%">Student</th>
							<th width="15%">Position</th>
							<th width="15%">Requested By</th>
							<th width="15%">Accepted By</th>
							<th width="20%">Requested At</th>
							<th width="20%">Actions</th>
						</tr>
					</thead>
					<tbody>
					@forelse($ots as $o)
						<tr>
							<td>{{{$o->controller->full_name}}}</td>
							<td>{{{$o->pos_req}}}</td>
							<td>{{{$o->mentor->full_name}}}</td>
							@if($o->mentor_id == 0)
							<td><i>NULL</i></td>
							@else
							<td>{{{$o->instructor->full_name}}}</td>
							@endif
							<td>{{{$o->created_at}}} z</td>
							@if($o->accepted == 0)
							<td>{{Form::open(['action'=>['InstructorController@acceptOTS', $o->id], 'style'=>'display:inline-block'])}}
                                    <button type="submit" class="btn btn-success btn-sm simple-tooltip" data-toggle="tooltip" title="Accept OTS Request"><i class="fa fa-check"></i></button>
                                {{Form::close()}}</td>
							@elseif($o->accepted == '1' && $o->mentor_id === Auth::id())
								<td>
								{{Form::open(['action'=>['InstructorController@cancelOTS', $o->id], 'style'=>'display:inline-block'])}}
                                    <button type="submit" class="btn btn-warning btn-sm simple-tooltip" title="Cancel OTS"><i class="fa fa-ban"></i></button>
                                {{Form::close()}}
                                {{Form::open(['action'=>['InstructorController@passOTS', $o->id], 'style'=>'display:inline-block'])}}
                                    <button type="submit" class="btn btn-success btn-sm simple-tooltip" title="Mark OTS Pass"><i class="fa fa-check"></i></button>
                                {{Form::close()}}
                                {{Form::open(['action'=>['InstructorController@failOTS', $o->id], 'style'=>'display:inline-block'])}}
                                    <button type="submit" class="btn btn-danger btn-sm simple-tooltip" title="Mark OTS Fail"><i class="fa fa-times"></i></button>
                                {{Form::close()}}
                                </td>
                            @else
                           	<td></td>
                            @endif
						</tr>
					@empty
                        <tr>
                            <td colspan="6"><center>No OTS Requests</center></td>
                        </tr>
                    @endforelse
		            </tbody>
		        </table>
			</div>
		</div>
	</div>
</div>

@stop
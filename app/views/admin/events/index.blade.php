@extends('layouts.master')

@section('title')
@parent
| Events
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Events - Admin</h2>
    </div>
</div>
    
<div class="container">
	<div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="25%">Event Title</th>
                            <th width="25%">Event Start</th>
                            <th width="25%">Event End</th>
                            <th width="10%">Status</th>
                            <th width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($event as $e)
                        <tr>
                        	<td>{{{$e->title}}}</td>
                            <td>{{{$e->event_start}}}</td>
                            <td>{{{$e->event_end}}}</td>
                            <td>{{{$e->status_long}}}</td>
                            <td>@if($e->status == '1')
                            	{{Form::open(['action'=>['EventController@setEventHidden', $e->id], 'style'=>'display:inline-block'])}}
                                <button type="submit" class="btn btn-warning btn-sm simple-tooltip" title="Set Hidden"><i class="fa fa-eye-slash"></i></button>
                                {{Form::close()}}
                                @elseif($e->status == '0')
                                {{Form::open(['action'=>['EventController@setEventActive', $e->id], 'style'=>'display:inline-block'])}}
                                    <button type="submit" class="btn btn-success btn-sm simple-tooltip" title="Set Active"><i class="fa fa-eye"></i></button>
                                {{Form::close()}}
                                @endif
                                {{Form::open(['action'=>['EventController@destroy', $e->id], 'method'=>'delete', 'style'=>'display:inline-block'])}}
                                    <button type="submit" class="btn btn-danger btn-sm simple-tooltip" title="Delete"><i class="fa fa-times"></i></button>
                                {{Form::close()}}
                                <a href="/admin/events/{{$e->id}}/edit" style="display:inline-block" class="btn btn-success btn-sm simple-tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a> <a href="/admin/events/{{$e->id}}" style="display:inline-block" class="btn btn-info btn-sm simple-tooltip" title="View"><i class="fa fa-info-circle"></i></a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No Events To Show</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop
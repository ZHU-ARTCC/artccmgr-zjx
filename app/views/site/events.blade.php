@extends('layouts.master')

@section('title')
@parent
| Event
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Event - Info And Signup</h2>
    </div>
</div>

@if($event)    
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <h4><img width="100%" src="{{{$event->banner_link}}}"></h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-7">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{{$event->title}}}</h3>
                </div>
                <div class="panel-body">
                    <h4 style="display:inline-block;">Host ARTCC:</h4> <h4 style="display:inline-block;">{{{$event->host_long}}}</h4><br />
                    <h4 style="display:inline-block;">Event Date:</h4> <h4 style="display:inline-block;">{{{$event->event_start}}}z - {{{$event->event_end}}}z</h4>
                    <h4><strong>Event Description</strong></h4>
                    <p>{{$event->description}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Position Assignments</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="30%">Position Name</th>
                                    <th width="60%">Controller</th>
                                    @if(Auth::check())
                        <th width="10%">Actions</th>
                       @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($event->positions->sortBy('order_index') as $position)
                                <tr>
                                    <td>{{$position->name}}</td>
                                    <td>{{$position->user ? "<b>".$position->user->full_name."</b>" : "No Assignment"}}</td>
            @if(Auth::check())                      
    @if($position->controller_id == Auth::id() || Auth::user()->can('snrstaff'))
                                    <td>{{Form::open(['action'=>['EventController@selfUnnasign', $position->id], 'metho'=>'POST'])}}
                                            <button type="submit" class="btn btn-warning btn-sm simple-tooltip" title="Self Unnasign"><i class="fa fa-times"></i></button>
                                        {{Form::close()}}
                                    </td>
                                    @else
                                    <td></td>
                                    @endif
@endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if(Auth::check())
                        @if(is_null($userpos))
                        {{ Form::open(['action' => ['EventController@requestPosition', $event->id], 'method' => 'POST']) }}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{Form::select('position_id[]', $available_positions, !empty($userreq[0]) ? $userreq[0]->position_id : null, ['class'=>'form-control'])}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{Form::select('position_id[]', $available_positions, !empty($userreq[1]) ? $userreq[1]->position_id : null, ['class'=>'form-control'])}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{Form::select('position_id[]', $available_positions, !empty($userreq[2]) ? $userreq[2]->position_id : null, ['class'=>'form-control'])}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                        {{ Form::close() }}
                        @endif
                    @endif
                    @if(Auth::check())
                        @if(Auth::user()->can('events'))
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th width="50%">Controller</th>
                                            <th width="30">Position</th>
                                            <th width="20%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($pos_req as $p)
                                        <tr>
                                            <td>{{$p->user->full_name}}</td>
                                            <td>{{$p->eventPosition->name}}</td>
                                            <td> {{ Form::open(['action' => ['EventController@assignPosition', $p->position_id, $p->user->id], 'method' => 'POST', 'style' => 'display: inline-block;']) }}
                                            <button class="btn btn-success btn-sm btn-addon simple-tooltip" title="Accept Position"><i class="fa fa-check"></i></button>{{ Form::close() }} {{ Form::open(['action' => ['EventController@deleteRequest', $p->id], 'method' => 'DELETE', 'style' => 'display: inline-block;']) }}
                                            <button class="btn btn-danger btn-sm btn-addon simple-tooltip" title="Delete Request"><i class="fa fa-times"></i></button>{{ Form::close() }}
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="3">No Position Requests</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>


                            <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th span=2>Direct Assignment</th>
                                </tr>
                            </thead>
                                {{ Form::open(['action' => ['EventController@assignPositionMan'], 'method' => 'POST', 'style' => 'display: inline-block;']) }}
                            <tr>
                                <td>Position:</td>
                                <td><div class="form-group">{{ Form::select('position_id', $available_positions, null, ['class'=>'form-control']) }}</div></td>
                            </tr>
                            <tr>

                            <td>Controller:</td>
                            <td>
                                <div class="form-group">{{ Form::select('controller_id', $user, null, ['class'=>'form-control']) }}</div></td>
                            </tr>
                            <tr>
                                <td><button type="submit" class="btn btn-success">Submit</button></td>
                                <td>&nbsp;</td>
                            </tr>
                            {{ Form::close() }}
                            </table>

                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>NO VALID EVENT FOUND</h3>
            </div>
        </div>
    </div>
@endif


@stop

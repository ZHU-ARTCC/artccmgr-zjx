@extends('layouts.master')

@section('title')
@parent
| Feedback
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Feedback - Admin - Accept Feedback</h2>
    </div>
</div>

@if($f)
    <div class="container">
        <div class="row">   
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Feedback for {{$f->controller->full_name}} on {{{$f->position}}}</h4>
                    </div>
                    <div class="panel-body">
                        <p><b>Position</b> {{$f->position}}</p>
                        <p><b>Submitted:</b> {{$f->created_at}}</p>
                        <p><b>Service Level:</b> {{$f->level_text}}</p>
                        <p><b>Submitted By:</b> {{$f->pilot_name}} ({{$f->pilot_id}}) flying as {{$f->flight_callsign}}</p>
                        {{ Form::open(['action' => ['AdminController@approveFeedback', $f->id], 'method' => 'PUT']) }}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{Form::label('comments', 'Pilot Comments:', ['class'=>'control-label'])}}
                                    {{Form::textarea('comments', $f->comments, ['class'=>'form-control'])}}
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{Form::label('staff_comments', 'Staff Comments:', ['class'=>'control-label'])}}
                                    {{Form::textarea('staff_comments', $f->staff_comments, ['class'=>'form-control'])}}
                                </div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="container">
        <div class="row">   
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4><b>NO FEEDBACK FOUND</b></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@stop
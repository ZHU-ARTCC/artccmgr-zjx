@extends('layouts.master')

@section('title')
@parent
| Feedback
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Feedback - View Feedback</h2>
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
                        @if(Auth::user()->can('instruct') || Auth::user()->can('snr_staff'))
                        <p><b>Submitted By:</b> {{$f->pilot_name}} ({{$f->pilot_id}}) flying as {{$f->flight_callsign}}</p>
                        @else
                        <p><b>Submitted By:</b> <i>HIDDEN (HIDDEN)</i> flying as {{$f->flight_callsign}}</p>
                        @endif
                        <p><b>Comments:</b> {{$f->comments}}</p>
                        <p><b>Staff Comments:</b> {{$f->staff_comments}}</p>
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
@extends('layouts.master')

@section('title')
@parent
| Training
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Training - Training Note</h2>
    </div>
</div>

@if($note)
	@if($note->controller_id == Auth::id() || Auth::user()->can('snrstaff'))
	    <div class="container">
	        <div class="row">   
	            <div class="col-sm-12">
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h4 class="panel-title">Training Note for {{$note->controller->full_name}} on {{$note->ses_pos}}, {{$note->date}} at {{$note->session_begin}}z</h4>
	                    </div>
	                    <div class="panel-body">
	                        <p><b>Training Type:</b> {{$note->ses_type}}</p>
	                        <p><b>Duration:</b> {{$note->duration}} with {{$note->instructor->full_name}}</p>
	                        <p><b>Comments:</b></p>
	                        {{$note->comments}}
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
	                        <h4><b>NOT AUTHORISED TO SEE THIS TRAINING NOTE</b></h4>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	@endif
@else
	<div class="container">
        <div class="row">   
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4><b>NO TRAINING NOTE FOUND</b></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@stop
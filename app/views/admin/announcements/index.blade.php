@extends('layouts.master')

@section('title')
@parent
| Announcements
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Announcements Admin</h2>
    </div>
</div>
    
<div class="container">
	<div class="row">
        {{ Form::open(['action' => ['AdminController@updateAnnouncements', $a->id]]) }}
       		<div class="row">
	            <div class="col-sm-12">
	              	<div class="form-group">
	       			{{Form::label('message', 'Message:', ['class'=>'control-label'])}}
	                {{Form::hidden('message', $a->message)}}
	                @include('partials.quill', ['id' => 'message'])
	       		</div>
	           	</div>
	        </div>
	        <div class="row">
	        	<div class="col-sm-6">
	        		<div class="form-group">
		                {{Form::label('class', 'Annoucement Type:', ['class'=>'control-label'])}}
		                {{Form::select('class', Announcement::$type, $a->class, ['class' => 'form-control'])}}
	                </div>
	                <div class="checkbox">
		                <label>
		                  	{{Form::checkbox('active', '1', $a->active)}}
		                  	Is Active?
		                </label>
              		</div>
              		<div class="form-group">
                		{{Form::submit('Save', ['class' => 'btn btn-primary'])}}
              		</div>
	        	</div>
	        </div>
        {{ Form::close() }}
    </div>
</div>

@stop

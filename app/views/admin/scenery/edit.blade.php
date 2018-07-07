@extends('layouts.master')

@section('title')
@parent
| Scenery
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Scenery - Admin - Edit</h2>
    </div>
</div>
    
    <div class="container">
       {{ Form::open(['action' => ['SceneryController@update', $scenery->id], 'method' => 'PUT']) }}
       		<div class="form-group">
                {{Form::label('name', 'Scenery Name:', ['class'=>'control-label'])}}
                {{Form::text('name', $scenery->name, ['class'=>'form-control'])}}
          </div>
          <div class="form-group">
                {{Form::label('description', 'Description:', ['class'=>'control-label'])}}
                {{Form::textarea('description', $scenery->description, ['class'=>'form-control'])}}
          </div>
          <div class="form-group">
                {{Form::label('type', 'Scenery For:', ['class'=>'control-label'])}}
                {{Form::select('type', array(
                              '1' => 'FSX/P3D',
                              '2' => 'X-Plane'), $scenery->type, ['class'=>'form-control'])}}
          </div>
          <div class="form-group">
                {{Form::label('link', 'Link To Scenery:', ['class'=>'control-label'])}}
                {{Form::text('link', $scenery->link, ['class'=>'form-control'])}}
          </div>
          <div class="form-group">
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
          </div>

       {{ Form::close() }}
    </div>

    <script>
    	$(document).ready(function(){
    		var toggleVisitorFrom = function(){
    			var visitorChecked = $("input[name=visitor]").is(':checked');
    			if (visitorChecked) {
    				$(".visitor-from").toggle(true);
    			} else {
    				$(".visitor-from").toggle(false);
    			}
    		};

    		

    		$("input[name=visitor]").change(function(evt){
    			toggleVisitorFrom();
    		});

    		toggleVisitorFrom();
    	});
    </script>

@stop
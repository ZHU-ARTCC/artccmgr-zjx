@extends('layouts.master')

@section('title')
@parent
| Scenery
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Scenery - Admin - Add</h2>
    </div>
</div>
    
    <div class="container">
       {{ Form::open(['action' => 'SceneryController@store']) }}
       		<div class="form-group">
       			{{Form::label('name', 'Scenery Name:', ['class'=>'control-label'])}}
                {{Form::text('name', null, ['class'=>'form-control'])}}
       		</div>
       		<div class="form-group">
       			{{Form::label('description', 'Description:', ['class'=>'control-label'])}}
                {{Form::textarea('description', null, ['class'=>'form-control'])}}
       		</div>
       		<div class="form-group">
       			{{Form::label('type', 'Scenery For:', ['class'=>'control-label'])}}
                {{Form::select('type', array(
                							'1' => 'FSX/P3D',
                							'2' => 'X-Plane'), null, ['class'=>'form-control'])}}
       		</div>
       		<div class="form-group">
       			{{Form::label('link', 'Link To Scenery:', ['class'=>'control-label'])}}
                {{Form::text('link', null, ['class'=>'form-control'])}}
       		</div>
       		<div class="form-group">
       			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
       		</div>

       {{ Form::close() }} 
    </div>

@stop
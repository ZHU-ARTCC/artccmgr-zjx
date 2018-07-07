@extends('layouts.master')

@section('title')
@parent
| Documents
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Admin - Instructing - Files - Edit</h2>
    </div>
</div>
    
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            {{Form::open(['action'=>['TrainingFilesController@update', $document->id], 'method' => 'PUT', 'files' => true])}}
                <div class="form-group">
                    {{Form::label('name', 'Document Name:', ['class'=>'control-label'])}}
                    {{Form::text('name', $document->name, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('file', 'File:', ['class'=>'control-label'])}}
                    {{Form::file('file', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('type', 'Type:', ['class'=>'control-label'])}}
                    {{Form::select('type', array(
                        'twr' => 'TWR Trainer',
                        'ac' => 'AC Sim',
                        'diag' => 'Training Diagrams',
                    ), $document->type, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('comments', 'Comments:', ['class'=>'control-label'])}}
                    {{Form::textarea('comments', $document->comments , ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            {{Form::close()}}
        </div>
    </div>
</div>

@stop
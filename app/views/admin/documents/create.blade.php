@extends('layouts.master')

@section('title')
@parent
| Documents
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Document - Add</h2>
    </div>
</div>
    
<div class="container">
	<div class="row">
        <div class="col-sm-12">
            {{Form::open(['action'=>'DocumentController@store', 'files' => true])}}
                <div class="form-group">
                    {{Form::label('name', 'Document Name:', ['class'=>'control-label'])}}
                    {{Form::text('name', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('file', 'File:', ['class'=>'control-label'])}}
                    {{Form::file('file', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('type', 'Type:', ['class'=>'control-label'])}}
                    {{Form::select('type', Document::$DownloadCats, null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('comments', 'Comments:', ['class'=>'control-label'])}}
                    {{Form::textarea('comments', null, ['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            {{Form::close()}}
        </div>
    </div>
</div>

@stop
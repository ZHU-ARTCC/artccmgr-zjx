@extends('layouts.master')

@section('title')
@parent
| Broadcast
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Broadcast - Send Mesage</h2>
    </div>
</div>

{{ Form::open(['action' => 'BroadcastController@store']) }}
    
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <button class="btn btn-primary" id="showOptions" type="button">Show Options</button>
        </div> 
    </div>
    <br />
    <div class="row" id="bcoptions" style="display: none;">
        {{ View::make('partials.bcoptions') }}
    </div>
    <br />
    <div class="row">
        <div class="col-sm-12">
             <div class="form-group">
                {{Form::label('subject', 'Broadcast Subject:', ['class'=>'control-label'])}}
                {{Form::text('subject', null, ['class'=>'form-control', 'id'=>'subject'])}}
            </div>
            <div class="form-group">
                {{Form::label('content', 'Broadcast Content:', ['class'=>'control-label'])}}
                {{Form::hidden('content', null)}}
                @include('partials.quill', ['id' => 'content'])
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <button class="btn btn-primary" id="preview" type="button" data-toggle="modal" data-target="#myModal">Preview and Send</button>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalTitle"></h4>
            </div>
            <div class="modal-body" id="modalContent">
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send Broadcast</button>
            </div>
        </div>
    </div>
</div>

{{ Form::close() }}


<script type="text/javascript">
    $(document).on('click', '#showOptions', function() {
        var bcoptions = $('#bcoptions');
        bcoptions.fadeIn(500);
        $(this).text('Hide Options');
        $(this).attr('id', 'hideOptions');
    });

    $(document).on('click', '#hideOptions', function() {
        var bcoptions = $('#bcoptions');
        bcoptions.fadeOut(500);
        $(this).text('Show Options');
        $(this).attr('id', 'showOptions');
    });

    $(document).on('click', '#preview', function() {
        var content = $('#ql-editor-1').html();
        $('#modalTitle').text('');
        $('#modalTitle').text($('#subject').val());
        $('#modalContent').html(content);
    });
</script>

@stop
@extends('layouts.master')

@section('title')
@parent
| Airports
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>ZHU Airports</h2>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
        {{Form::label('airport', 'Airport ID:', ['class'=>'control-label'])}}
        {{Form::select('airport', ['' => ''] + Airport::lists('id', 'id'), null, ['class'=>'form-control'])}}
     	</div>
		</div>
	</div>
</div>

<link rel="stylesheet" href="/assets/css/select2.min.css" />
<script src="/assets/js/select2.min.js"></script>
<script>
  $(document).ready(function(){
    $("select[name=airport]").select2({
      placeholder: "Select an airport",
      allowClear: true
    });

    $("select[name=airport]").change(function(evt){
      top.location.href = '/airports/' + $(evt.target).val();
    })
  })
</script>

@stop

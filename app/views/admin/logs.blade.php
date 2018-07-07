@extends('layouts.master')

@section('title')
@parent
| Log
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Controller Log</h2>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
        {{Form::label('user', 'Airport ID:', ['class'=>'control-label'])}}
        {{Form::select('user', ['' => ''] + $user, null, ['class'=>'form-control'])}}
     	</div>
		</div>
	</div>
</div>

<link rel="stylesheet" href="/assets/css/select2.min.css" />
<script src="/assets/js/select2.min.js"></script>
<script>
  $(document).ready(function(){
    $("select[name=user]").select2({
      placeholder: "Select a controller",
      allowClear: true
    });

    $("select[name=user]").change(function(evt){
      top.location.href = '/log/' + $(evt.target).val();
    })
  })
</script>

@stop
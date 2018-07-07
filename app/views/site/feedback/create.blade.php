@extends('layouts.master')

@section('title')
@parent
| Feedback
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Feedback - Submit</h2>
    </div>
</div>
    
<div class="container">
        {{Form::open(['action'=>'FeedbackController@store'])}}
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        {{Form::label('controller_id', 'Controller:', ['class'=>'control-label'])}}
                        {{Form::select('controller_id', $members, null, ['class'=>'form-control'])}}
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        {{Form::label('position', 'Position:', ['class'=>'control-label'])}}
                        {{Form::select('position', Feedback::$Positions, 'JAX_CTR', ['class'=>'form-control'])}}
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        {{Form::label('level', 'Service Level', ['class'=>'control-label'])}}
                        {{Form::select('level', array(
                                '4' => 'Excellent', 
                                '3' => 'Good', 
                                '2' => 'Fair', 
                                '1' => 'Poor', 
                                '0' => 'Unsatisfactory'), null, ['class'=>'form-control'])}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        {{Form::label('pilot_id', 'VATSIM CID:', ['class'=>'control-label'])}}
                        {{Form::text('pilot_id', null, ['class'=>'form-control'])}}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        {{Form::label('flight_callsign', 'Flight Callsign:', ['class'=>'control-label'])}}
                        {{Form::text('flight_callsign', null, ['class'=>'form-control'])}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        {{Form::label('pilot_name', 'Pilot Name:', ['class'=>'control-label'])}}
                        {{Form::text('pilot_name', null, ['class'=>'form-control'])}}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        {{Form::label('pilot_email', 'Pilot Email:', ['class'=>'control-label'])}}
                        {{Form::text('pilot_email', null, ['class'=>'form-control'])}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        {{Form::label('comments', 'Comments:', ['class'=>'control-label'])}}
                        {{Form::textarea('comments', null, ['class'=>'form-control'])}}
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
            {{Form::close()}}
</div>

<script type="text/javascript">
    $(document).on('ready', function() {
        var array = ['APP','TWR','GND','DEL'];
        $.each($('#position option'), function(val) {
            var option = $(this);
            if($.inArray(option.val(), array) != -1) {
                option.prop('disabled', true);
            } 
        });
    });
</script>

@stop
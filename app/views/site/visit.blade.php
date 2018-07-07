@extends('layouts.master')

@section('title')
@parent
| Visit
@stop

@section('content')
<div class="page-heading-two">
    <div class="container">
        <h2>Visiting Application</h2>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <p>Thanks for your interest in visiting Virtual Houston Air Route Traffic Control Center (vZHU ARTCC).  If you are interested in transferring into vZHU, you are at the wrong page.  Visit <a href="http://www.vatusa.net">VATUSA</a> to get started.</p>
            <p>Visiting controllers must understand that primary training will be given to vZHU Controllers and <u>vZHU will not provide rating training to visiting controllers</u> in accordance to VATSIM's Visiting And Transferring Controller Policy.  Visitors will only be given procedure training.  Controllers found to not meet the Global Ratings Policy required competency for their rating will be referred back to their home ARTCC for additional training and may be rejected or have their visiting status revoked until they meet GRP requirements.</p>
            <p>As allowed under the Visiting and Transferring Control Policy, visiting controllers are not permitted to control within the vZHU airspace until they have been certified to do so by a Virtual Houston ARTCC Instructor.</p>
            <p>If you agree with the above and the vZHU Policies, please fill out the form below to get started.</p>
            <p><b>For this application to be reviewed and approved, a letter of recommendation must be received from your home ARTCC's ATM or DATM, or if outside VATUSA, your region Director. Your application WILL NOT be processed unless the letter of recommendation is sent to datm@zhuartcc.org</b></p>
            <br />
            <br />
            {{Form::open(['action'=>'AdminController@saveVisit'])}}
                    <div class="col-md-6">
                        <div class="form-group">
                            {{Form::label('id', 'CID:', ['class'=>'control-label'])}}
                            {{Form::text('id', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('first_name', 'First Name:', ['class'=>'control-label'])}}
                            {{Form::text('first_name', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('last_name', 'Last Name:', ['class'=>'control-label'])}}
                            {{Form::text('last_name', null, ['class'=>'form-control'])}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {{Form::label('email', 'Email Address:', ['class'=>'control-label'])}}
                            {{Form::text('email', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('rating_id', 'Rating:', ['class'=>'control-label'])}}
                            {{Form::select('rating_id', Visit::$RatingShort, 1, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('home', 'Home ARTCC or Division:', ['class'=>'control-label'])}}
                            {{Form::text('home', null, ['class'=>'form-control', 'placeholder'=>'i.e. ZHU or VATUK'])}}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {{Form::label('reason', 'Why do you want to visit vZHU?:', ['class'=>'control-label'])}}
                            {{Form::textarea('reason', null, ['class'=>'form-control'])}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="check"> <strong>I accept that I need a letter of reccomendation for my application to be processed</strong>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success submitapp" style="float: right;">Submit</button>
                        </div>
                    </div>
            {{Form::close()}}
        </div>
    </div>
</div>

<script>
    $("form").submit(function(e) {
        if(!$('input[type=checkbox]:checked').length) {
            alert("Please confirm that you need a LOR for us to process your application.");
            return false;
        }
        return true;
    });
</script>
@stop

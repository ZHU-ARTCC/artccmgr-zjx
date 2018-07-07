@extends('layouts.master')

@section('title')
@parent
| Roster
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Roster - Admin - Edit</h2>
    </div>
</div>
    
    <div class="container">
       {{ Form::open(['action' => ['RosterController@update', $User->id], 'method' => 'PUT']) }}
       		<div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                {{Form::label('id', 'CID:', ['class'=>'control-label'])}}
                {{Form::text('id', $User->id, ['class'=>'form-control', 'disabled'])}}
           		</div>
           		@if(Auth::user()->can('snrstaff'))
              <div class="form-group">
           			{{Form::label('first_name', 'First Name:', ['class'=>'control-label'])}}
                {{Form::text('first_name', $User->first_name, ['class'=>'form-control'])}}
           		</div>
           		<div class="form-group">
           			{{Form::label('last_name', 'Last Name:', ['class'=>'control-label'])}}
                {{Form::text('last_name', $User->last_name, ['class'=>'form-control'])}}
           		</div>
           		<div class="form-group">
           			{{Form::label('email', 'E-mail:', ['class'=>'control-label'])}}
                {{Form::text('email', $User->email, ['class'=>'form-control'])}}
           		</div>
              @else
              <div class="form-group">
                {{Form::label('first_name', 'First Name:', ['class'=>'control-label'])}}
                {{Form::text('first_name', $User->first_name, ['class'=>'form-control', 'disabled'])}}
              </div>
              <div class="form-group">
                {{Form::label('last_name', 'Last Name:', ['class'=>'control-label'])}}
                {{Form::text('last_name', $User->last_name, ['class'=>'form-control', 'disabled'])}}
              </div>
              <div class="form-group">
                {{Form::label('email', 'E-mail:', ['class'=>'control-label'])}}
                    {{Form::text('email', $User->email, ['class'=>'form-control', 'disabled'])}}
              </div>
              @endif
       		    <div class="form-group">
                {{Form::label('rating_id', 'Rating:', ['class'=>'control-label'])}}
                {{Form::select('rating_id', User::$RatingShort, $User->rating_id, ['class' => 'form-control'])}}
              </div>
              @if(Auth::user()->can('snrstaff'))
              <div class="form-group">
                {{Form::label('staff_role', 'Staff Role:', ['class'=>'control-label'])}}
                {{Form::select('staff_role', $staff_roles, $UserSRoleID, ['class' => 'form-control'])}}
              </div>
              <div class="form-group">
                {{Form::label('training_role', 'Training Role:', ['class'=>'control-label'])}}
                {{Form::select('training_role', $training_roles, $UserTRoleID, ['class' => 'form-control'])}}
              </div>
              @endif
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                {{Form::label('del', 'Delivery Cert:', ['class'=>'control-label'])}}
                {{Form::select('del', [
                      0 => 'None',
                      1 => 'Minor Training',
                      2 => 'Minor Certified',
                      3 => 'Major Training',
                      4 => 'Major Certified',
                    ], $User->del, ['class' => 'form-control'])}}
              </div>
              <div class="form-group">
                {{Form::label('gnd', 'Ground Cert:', ['class'=>'control-label'])}}
                {{Form::select('gnd', [
                      0 => 'None',
                      1 => 'Minor Training',
                      2 => 'Minor Certified',
                      3 => 'Major Training',
                      4 => 'Major Certified',
                    ], $User->gnd, ['class' => 'form-control'])}}
              </div>
              <div class="form-group">
                {{Form::label('twr', 'Tower Cert:', ['class'=>'control-label'])}}
                {{Form::select('twr', [
                      0 => 'None',
                      1 => 'Minor Training',
                      2 => 'Minor Certified',
                      3 => 'Major Training',
                      4 => 'Major Certified',
                    ], $User->twr, ['class' => 'form-control'])}}
              </div>
              <div class="form-group">
                {{Form::label('app', 'Approach Cert:', ['class'=>'control-label'])}}
                {{Form::select('app', [
                      0 => 'None',
                      1 => 'Minor Training',
                      2 => 'Minor Certified',
                      3 => 'Major Training',
                      4 => 'Major Certified',
                    ], $User->app, ['class' => 'form-control'])}}
              </div>
              <div class="form-group">
                {{Form::label('ctr', 'Enroute Cert:', ['class'=>'control-label'])}}
                {{Form::select('ctr', [
                      0 => 'None',
                      1 => 'Training',
                      2 => 'Certified',
                    ], $User->ctr, ['class' => 'form-control'])}}
              </div>
              @if(Auth::user()->can('snrstaff') || Auth::user()->can('instruct'))
              <div class="checkbox canTrain">
                <label>
                  {{Form::checkbox('canTrain', '1', $User->canTrain)}}
                  Can Train?
                </label>
              </div>
              @endif
              @if(Auth::user()->can('snrstaff'))
              <div class="checkbox visitor">
                <label>
                  {{Form::checkbox('visitor', '1', $User->visitor)}}
                  Visitor
                </label>
              </div>
              <div class="form-group visitor-from">
                {{Form::label('visitor_from', 'Visiting From:', ['class'=>'control-label'])}}
                {{Form::text('visitor_from', $User->visitor_from, ['class'=>'form-control'])}}
              </div>
              @endif
              <div class="form-group">
                {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
              </div>
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
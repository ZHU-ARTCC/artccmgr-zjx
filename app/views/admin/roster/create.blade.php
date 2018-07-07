@extends('layouts.master')

@section('title')
@parent
| Roster
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Roster - Admin - Add</h2>
    </div>
</div>
    
    <div class="container">
       {{ Form::open(['action' => 'RosterController@store']) }}
       		<div class="form-group">
       			    {{Form::label('id', 'CID:', ['class'=>'control-label'])}}
                <div class="input-group">
                  {{Form::text('id', null, ['class'=>'form-control'])}}
                  <div class="input-group-btn">
                    <button class="btn btn-default search-cid" type="button">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
       		</div>
       		<div class="form-group">
       			{{Form::label('first_name', 'First Name:', ['class'=>'control-label'])}}
                {{Form::text('first_name', null, ['class'=>'form-control'])}}
       		</div>
       		<div class="form-group">
       			{{Form::label('last_name', 'Last Name:', ['class'=>'control-label'])}}
                {{Form::text('last_name', null, ['class'=>'form-control'])}}
       		</div>
       		<div class="form-group">
       			{{Form::label('email', 'E-mail:', ['class'=>'control-label'])}}
                {{Form::text('email', null, ['class'=>'form-control'])}}
       		</div>
       		<div class="form-group">
                {{Form::label('rating_id', 'Rating:', ['class'=>'control-label'])}}
                {{Form::select('rating_id', User::$RatingShort, 1, ['class' => 'form-control'])}}
              </div>

       		<div class="checkbox visitor">
       			<label>
	       			{{Form::checkbox('visitor', '1', false)}}
	       			Visitor
       			</label>
       		</div>
       		<div class="form-group visitor-from">
       			{{Form::label('visitor_from', 'Visiting From:', ['class'=>'control-label'])}}
                {{Form::text('visitor_from', null, ['class'=>'form-control'])}}
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


        $(".search-cid").click(function(){
          var cid = $("#id").val();
          $("#id").parents(".form-group").removeClass('has-error');

          $.get('/admin/roster/vatsim/' + cid, function(data){
            if (data.error) {
              $("#id").parents(".form-group").addClass('has-error');
              return;
            }

            $("#first_name").val(data.name_first);
            $("#last_name").val(data.name_last);
            $("#email").val(data.email);
            $("#rating_id").val(data.rating);
          });
        });
    	});
    </script>

@stop
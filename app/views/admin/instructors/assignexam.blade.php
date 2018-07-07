@extends('layouts.master')

@section('title')
@parent
| Instructing
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Admin - Instructing - Exam Center</h2>
    </div>
</div>

<div class="container">
	<a type="button" class="btn btn-success" data-toggle="modal" data-target="#assign-exam">Assign Exam</a>
	<p></p>
	<div class="row">
			    <div class="col-sm-12">
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
								    <th width="25%">Student</th>
								    <th width="25%">Exam</th>
								    <th width="25%">Assigned By</th>
									<th width="25%">Actions</th>
								</tr>
							</thead>
							<tbody>
							@forelse ($exams as $e)
								<tr>
									<td>{{{$e->controller->full_name}}}</td>
									<td>{{{$e->ass_exam}}}</td>
									<td>{{{$e->instructor->full_name}}}</td>
									@if($e->instructor_id == Auth::id())
									<td>{{Form::open(['action'=>['InstructorController@destroyExam', $e->id], 'method'=>'delete'])}}
                                    <button type="submit" class="btn btn-danger btn-sm simple-tooltip" title="Delete"><i class="fa fa-times"></i></button>
                                {{Form::close()}}
									</td>
									@else
									<td></td>
									@endif
								</tr>
							@empty
                                <tr>
                            	    <td colspan="4"><center>No Assigned Exams Currently</center></td>
                                </tr>
                            @endforelse
		                    </tbody>
		                </table>
					</div>
			    </div>
	</div>
</div>


<div class="modal fade" id="assign-exam">
	{{ Form::open(['action' => 'InstructorController@assignExam']) }}
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Assign Exam</h4>
	      </div>
	      <div class="modal-body">
	      	
	      	<div class="form-group">
       			{{Form::label('controller_id', 'Controller:', ['class'=>'control-label'])}}
                {{Form::select('controller_id', $user, null, ['class'=>'form-control'])}}
       		</div>
       		<div class="form-group">
		        {{Form::label('exam_id', 'Exam:', ['class'=>'control-label'])}}
		        {{Form::select('exam_id', Exam::$AssExam, 1, ['class'=>'form-control'])}}
		    </div>
	      	
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Assign Exam</button>
	      </div>
	    </div>
	  </div>
  {{ Form::close() }}
</div>

@stop
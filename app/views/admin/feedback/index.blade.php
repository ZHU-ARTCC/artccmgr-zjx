@extends('layouts.master')

@section('title')
@parent
| Feedback
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Feedback - Pending</h2>
    </div>
</div>
    
<div class="container">
	<div class="row">
        <div class="col-sm-12">
        Hover over service level to see pilot details!
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="10%"><center>Position</center></th>
                            <th width="20%"><center>Controller</center></th>
                            <th width="12%"><center>Service Level</center></th>
                            <th width="35%"><center>Comments</center></th>
                            <th width="13%"><center>Submitted</center></th>
                            <th width="10%"><center>Actions</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($feedback as $h)
                        <tr>
                            <td>{{{$h->position}}}</td>
                            <td>{{{$h->controller->full_name}}}</td>
                            <td><span class="simple-tooltip" title="Submitted by {{{$h->pilot_name}}} ({{{$h->pilot_id}}}) flying as {{{$h->flight_callsign}}}">{{{$h->level_text}}}</span></td>
                            <td class="pilot_comments">{{{$h->comments}}}</td>
                            <td>{{{$h->created_at}}}z</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#approvalModal-{{$h->id}}" class="btn btn-success btn-sm simple-tooltip" title="Accept Feedback"><i class="fa fa-check"></i></a>
                                {{Form::open(['action'=>['FeedbackController@rejectFeedback', $h->id], 'style'=>'display:inline-block'])}}
                                    <button type="submit" class="btn btn-danger btn-sm simple-tooltip" title="Reject Feedback"><i class="fa fa-times"></i></button>
                                {{Form::close()}}

                                <div class="modal fade" id="approvalModal-{{$h->id}}">
                                    <div class="modal-dialog">
                                            <div class="modal-content">
                                            {{ Form::open(['action'=>['FeedbackController@approveFeedback', $h->id]])}}

                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Approve Feedback</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>
                                                        Pilot Comments
                                                        </label>
                                                        <textarea name="comments" class="form-control">{{$h->comments}}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>
                                                        Staff Comments
                                                        </label>
                                                        <textarea name="staff_comments" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</a>
                                                </div>

                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="7">No Feedback To Review Yet</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop
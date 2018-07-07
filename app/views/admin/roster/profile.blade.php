@extends('layouts.master')

@section('title')
@parent
| Profile
@stop

@section('content')
@if($user)
<div class="page-heading-two">
    <div class="container">
        <h2>Profile - {{{$user->full_name}}}</h2>
    </div>
</div>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4 class="mb-md">Feedback</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped no-footer">
                        <thead>
                            <tr>
                                <th width="25%">Position</th>
                                <th width="45%">Date</th>
                                <th width="30%">Service Level</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($feedback as $f)
                            <tr>
                                <td><a href="/admin/feedback/{{$f->id}}">{{{$f->position}}}</a></td>
                                <td>{{{$f->created_at}}}z</td>
                                <td>{{{$f->level_text}}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3"><center>No Feedback available for the User!</center></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-4">
                <h4 class="mb-md">Controller Logbook</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped no-footer">
                        <thead>
                            <tr>
                                <th width="30%">Position</th>
                                <th width="30%">Date</th>
                                <th width="40%">Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($log as $l)
                            <tr>
                                <td>{{{$l->position}}}</td>
                                <td>{{{$l->date}}}</td>
                                <td>{{{$l->duration_time}}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3"><center>No Stats available for the User!</center></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-3">
                <h4 class="mb-md">Controller Stats</h4>
                <div class="well well-sm">
                    @if($monthhrsout)
                    <h3>{{{$monthhrsout}}}</h3>
                    @endif
                    <p>Hours This Month</p>
                </div>
                <div class="well well-sm">
                    @if($yearhrsout)
                    <h3>{{{$yearhrsout}}}</h3>
                    @endif
                    <p>Hours This Year</p>
                </div>
                <div class="well well-sm">
                    @if($totalhrsout)
                    <h3>{{{$totalhrsout}}}</h3>
                    @endif
                    <p>Total Hours</p>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="page-heading-two">
    <div class="container">
        <h2>Profile</h2>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>USER DOES NOT EXIST</h3>
            </div>
        </div>
    </div>
    @endif

@stop
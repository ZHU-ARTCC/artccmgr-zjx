@extends('layouts.master')

@section('title')
@parent
| Visiting Requests
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Roster - Admin - Visiting Requests</h2>
    </div>
</div>

<div class="container">  
    <div class="row">
        <div class="col-sm-12">
            Hover over the name to see the reason of application
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="7%"><center>CID</center></th>
                            <th width="13%"><center>Name</center></th>
                            <th width="20%"><center>Email</center></th>
                            <th width="5%"><center>Rating</center></th>
                            <th width="15%"><center>Home ARTCC/Division</center></th>
                            <th width="14%"><center>Requested At</center></th>
                            <th width="14%"><center>Updated At</center></th>
                            <th width="15%"><center>Actions</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($visit as $v)
                        <tr>
                            <td>{{{$v->cid}}}</td>
                            <td><span class="simple-tooltip" title="{{$v->reason}}">{{$v->full_name}}</span></td>
                            <td>{{{$v->email}}}</td>
                            <td>{{{$v->rating_short}}}</td>
                            <td>{{{$v->home}}}</td>
                            <td>{{{$v->created_at}}}z</td>
                            <td>{{{$v->updated_at}}}z</td>
                            <td>{{Form::open(['action'=>['AdminController@acceptVRequest', $v->id], 'style'=>'display:inline-block'])}}
                                <button type="submit" class="btn btn-success btn-sm simple-tooltip" title="Accept Request"><i class="fa fa-check"></i></button>
                                {{Form::close()}}
                                {{Form::open(['action'=>['AdminController@denyVRequest', $v->id], 'style'=>'display:inline-block'])}}
                                <button type="submit" class="btn btn-danger btn-sm simple-tooltip" title="Reject Request"><i class="fa fa-times"></i></button>
                                {{Form::close()}}
                                @if($v->updated == 0)
                                {{Form::open(['action'=>['AdminController@updateVRequest', $v->id], 'style'=>'display:inline-block'])}}
                                <button type="submit" class="btn btn-warning btn-sm simple-tooltip" title="Send 2 Week Notification"><i class="fa fa-envelope"></i></button>
                                {{Form::close()}}
                                @endif</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8"><center>No Visiting Requests Pending</center></td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop
@extends('layouts.master')

@section('title')
@parent
| Broadcast
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Broadcast - Index</h2>
    </div>
</div>
    
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <a class="btn btn-success btn-lg" href="/admin/broadcast/create">Broadcast Message</a>
            <p></p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="60%">Subject</th>
                            <th width="20%">Broadcasted By</th>
                            <th width="20%">Broadcasted</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($broadcast as $b)
                        <tr>
                            <td>{{ str_limit($b->subject, $limit = 100, $end = '...') }}</td>
                            <td>{{ $b->admin->full_name }}</td>
                            <td>{{ $b->created_at->diffForHumans() }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3"><center>No Broadcasts</center></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop
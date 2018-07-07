@extends('layouts.master')

@section('title')
@parent
| Statistics
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Statistics</h2>
    </div>
</div>
    

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <center><h4>Total Hours This Month</h4></center>
            <div class="well well-sm">
            	<center><h3>
                    @if(!empty($all_stats['month']))
                    {{{ $all_stats['month'] }}}
                    @else
                    0
                    @endif
                </h3></center>
            </div>
        </div>
        <div class="col-sm-4">
            <center><h4>Total Hours This Year</h4></center>
            <div class="well well-sm">
            	<center><h3>
                    @if(!empty($all_stats['year']))
                    {{{ $all_stats['year'] }}}
                    @else
                    0
                    @endif
                </h3></center>
            </div>
        </div>
        <div class="col-sm-4">
            <center><h4>Total Hours on Record</h4></center>
            <div class="well well-sm">
            	<center><h3>
                    @if(!empty($all_stats['total']))
                    {{{ $all_stats['total'] }}}
                    @else
                    0
                    @endif
                </h3></center>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php
                $mname = date("F", mktime(0, 0, 0, $month, 1, $year));
                if ($month == 1) { $pm = 12; $pyr = $year - 1; } else { $pm = $month -1; $pyr = $year; }
                if ($month == 12) { $nm = 1; $nyr = $year + 1; } else { $nm = $month + 1; $nyr = $year; }
            ?>
            <ul class="pager">
                <li class="previous"><a href="/statistics/<?=$pyr?>/<?=$pm?>">Previous</a></li>
                <li><?=$mname?> 20<?=$year?></li>
                <li class="next"><a href="/statistics/<?=$nyr?>/<?=$nm?>">Next</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a data-toggle="tab" href="#home">Home Controllers</a></li>
                <li><a data-toggle="tab" href="#visit">Visiting Controllers</a></li>
                <li><a data-toggle="tab" href="#homeloa">Home LOA Controllers</a></li>
                <li><a data-toggle="tab" href="#visitloa">Visiting LOA Controllers</a></li>
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="21%">Name</th>
                                            <th width="12%">CID</th>
                                            <th width="15%">Rating</th>
                                            <th width="13%">C/G/L</th>
                                            <th width="13%">Terminal Radar</th>
                                            <th width="13%">Enroute</th>
                                            <th width="13%">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($home as $h)
                                        <tr>
                                            <td>{{{$h->full_name}}}</td>
                                            <td>{{{$h->id}}}</td>
                                            <td>{{{$h->rating_long}}}</td>
                                            <td>{{{ $stats[$h->id]->local_hrs }}}</td>
                                            <td>{{{ $stats[$h->id]->approach_hrs }}}</td>
                                            <td>{{{ $stats[$h->id]->enroute_hrs }}}</td>
                                            <td>{{{ $stats[$h->id]->total_hrs }}}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                          <td colspan="7">No Home Controllers</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="visit" class="tab-pane fade in">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="21%">Name</th>
                                            <th width="12%">CID</th>
                                            <th width="15%">Rating</th>
                                            <th width="13%">C/G/L</th>
                                            <th width="13%">Terminal Radar</th>
                                            <th width="13%">Enroute</th>
                                            <th width="13%">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($visit as $v)
                                        <tr>
                                            <td>{{{$v->full_name}}} from {{{$v->visitor_from}}}</td>
                                            <td>{{{$v->id}}}</td>
                                            <td>{{{$v->rating_long}}}</td>
                                            <td>{{{$stats[$v->id]->local_hrs}}}</td>
                                            <td>{{{$stats[$v->id]->approach_hrs}}}</td>
                                            <td>{{{$stats[$v->id]->enroute_hrs}}}</td>
                                            <td>{{{$stats[$v->id]->total_hrs}}}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                          <td colspan="7">No Visiting Controllers</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="homeloa" class="tab-pane fade in">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="21%">Name</th>
                                            <th width="12%">CID</th>
                                            <th width="15%">Rating</th>
                                            <th width="13%">C/G/L</th>
                                            <th width="13%">Terminal Radar</th>
                                            <th width="13%">Enroute</th>
                                            <th width="13%">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($homeloa as $hl)
                                        <tr>
                                            <td>{{{$hl->full_name}}}</td>
                                            <td>{{{$hl->id}}}</td>
                                            <td>{{{$hl->rating_long}}}</td>
                                            <td>{{{$stats[$hl->id]->local_hrs}}}</td>
                                            <td>{{{$stats[$hl->id]->approach_hrs}}}</td>
                                            <td>{{{$stats[$hl->id]->center_hrs}}}</td>
                                            <td>{{{$stats[$hl->id]->total_hrs}}}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                          <td colspan="7">No Home LOA Controllers</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="visitloa" class="tab-pane fade in">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="21%">Name</th>
                                            <th width="12%">CID</th>
                                            <th width="15%">Rating</th>
                                            <th width="13%">C/G/L</th>
                                            <th width="13%">Terminal Radar</th>
                                            <th width="13%">Enroute</th>
                                            <th width="13%">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($visitloa as $vl)
                                        <tr>
                                            <td>{{{$vl->full_name}}} from {{{$vl->visitor_from}}}</td>
                                            <td>{{{$vl->id}}}</td>
                                            <td>{{{$vl->rating_long}}}</td>
                                            <td>{{{$stats[$vl->id]->local_hrs}}}</td>
                                            <td>{{{$stats[$vl->id]->approach_hrs}}}</td>
                                            <td>{{{$stats[$vl->id]->center_hrs}}}</td>
                                            <td>{{{$stats[$vl->id]->total_hrs}}}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                          <td colspan="7">No Visiting LOA Controllers</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop

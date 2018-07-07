@extends('layouts.master')

@section('title')
@parent
| Airports
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>ZHU Airport - {{{$airport->id}}}</h2>
    </div>
</div>

    <div class="container">
        <div class="row">   
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">{{{$airport->name}}}</h4>
                    </div>
                    <div class="panel-body">
                        <img src="http://flightaware.com/resources/airport/{{{$airport->iata}}}/APD/AIRPORT+DIAGRAM/png" width="100%">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Live Infmation</h4>
                    </div>
                    <div class="panel-body">
                        {{{$weather->metar}}}
                        @if($weather->type == 'VFR')
                        <p>The airport is in VFR flying conditions</p>
                        @elseif($weather->type == 'MVFR')
                        <p>The airport is in MVFR flying conditions</p>
                        @elseif($weather->type == 'IFR')
                        <p>The airport is in IFR flying conditions</p>
                        @endif
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Charts</h4>
                    </div>
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">General</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="list-unstyled">
                                    @foreach($airport->general as $chart)
                                        <li>
                                            <a target="_blank" href="{{ $chart['url'] }}">
                                                {{ $chart['name'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Departure Procedures (DP)</a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                   <ul class="list-unstyled">
                                    @foreach($airport->departures as $chart)
                                        <li>
                                            <a target="_blank" href="{{ $chart['url'] }}">
                                                {{ $chart['name'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Standard Arrivals (STAR)</a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="list-unstyled">
                                    @foreach($airport->arrivals as $chart)
                                        <li>
                                            <a target="_blank" href="{{ $chart['url'] }}">
                                                {{ $chart['name'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Instrument Approaches (IAP)</a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="list-unstyled">
                                    @foreach($airport->approaches as $chart)
                                        <li>
                                            <a target="_blank" href="{{ $chart['url'] }}">
                                                {{ $chart['name'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Live Pilots</h4>
                    </div>
                    <div class="panel-body">
                        <b>Departures</b>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td width="10%">Callsign</td>
                                    <td width="24%">Pilot Name</td>
                                    <td width="11%">Aircraft Type</td>
                                    <td width="11%">Arrival</td>
                                    <td width="11%">Filed Cruise</td>
                                    <td width="11%">Altitude</td>
                                    <td width="11%">Ground Speed</td>
                                    <td width="11%">Flight State</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($departure_flights as $d)
                                <tr>
                                    <td>{{$d->callsign}}</td>
                                    <td>{{$d->real_name}}</td>
                                    <td>{{$d->aircraft_type}}</td>
                                    <td>{{$d->arr_apt}}</td>
                                    <td>{{$d->planned_cruise}}</td>
                                    <td>{{$d->real_alt}}</td>
                                    <td>{{$d->ground_speed}}</td>
                                    <td>{{$d->status}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8">No Scheduled Departures</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <br />
                        <b>Arrivals</b>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td width="10%">Callsign</td>
                                    <td width="24%">Pilot Name</td>
                                    <td width="11%">Aircraft Type</td>
                                    <td width="11%">Departure</td>
                                    <td width="11%">Filed Cruise</td>
                                    <td width="11%">Altitude</td>
                                    <td width="11%">Ground Speed</td>
                                    <td width="11%">Flight State</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($arrival_flights as $a)
                                <tr>
                                    <td>{{$a->callsign}}</td>
                                    <td>{{$a->real_name}}</td>
                                    <td>{{$a->aircraft_type}}</td>
                                    <td>{{$a->dep_apt}}</td>
                                    <td>{{$a->planned_cruise}}</td>
                                    <td>{{$a->real_alt}}</td>
                                    <td>{{$a->ground_speed}}</td>
                                    <td>{{$a->status}}</td> 
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8">No Scheduled Arrivals</td>
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

<script> jQuery('.accordion-2 .panel-heading a[data-toggle="collapse"]').on('click', function () {   
    jQuery('.accordion-2 .panel-heading a[data-toggle="collapse"]').removeClass('actives');
    $(this).addClass('actives');
 });
</script>

@stop

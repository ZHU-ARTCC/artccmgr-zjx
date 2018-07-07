<div class="col-md-6 weather">
    <h2><i class="fa fa-cloud"></i> Weather</h2>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead>
                <th><center>Field</center></th>
                <th><center>Type</center></th>
                <th><center>Wind</center></th>
                <th><center>Altimeter</center></th>
            </thead>
            <tbody>
                @foreach($weather as $wx)
                <tr>
                    <td>{{{$wx->id}}}</td>
                    <td class="weather-type {{{ strtolower($wx->type) }}}" >
                        <span class="simple-tooltip" title="{{{$wx->metar}}}">{{{$wx->type}}}</span>
                    </td>
                    <td> {{{$wx->wind}}} </td>
                    <td> {{{$wx->baro}}} </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-right">Last Updated {{ $wxupdate }}</td>
                </tr>
                <tr>
                    <td colspan="4" class="text-center small">Hover over Type column to see full METAR.</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<div class="col-md-6">
    <h2><i class="fa fa-search"></i> Who's Online?</h2>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th width="20%"><center>Position</center></th>
                    <th width="20%"><center>Frequency</center></th>
                    <th width="40%"><center>Controller</center></th>
                    <th width="20%"><center>Time Online</center></th>
                </tr>
            </thead>
            
            @foreach($online as $controller)
            <tbody>
                <tr>
                    <td align="center">{{ $controller->atc }}</td>
                    <td align="center">{{ $controller->freq }}</td>
                    @if($controller->controller)
                        <td align="center">{{ $controller->controller->full_name }} - ({{ $controller->controller->rating_short }})</td>
                    @else
                        <td align="center">{{ $controller->name }} - ({{ $controller->rating_short }})</td>
                    @endif
                    <td align="center">{{ $controller->duration() }}</td>
                </tr>
            </tbody>
            @endforeach

            <tfoot>
                <tr>
                    <td align="center" colspan="4">
                        <img src="/assets/images/spinner_radar.gif">
                        @if($online->count() == 0)
                        There are no controllers online!
                        @elseif($online->count() == 1)
                        Currently 1 vZHU Controller Online!
                        @else
                        Currently {{$online->count()}} ZHU Controllers Online!
                        @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="text-right">
                        Last Updated {{ $atcupdate }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

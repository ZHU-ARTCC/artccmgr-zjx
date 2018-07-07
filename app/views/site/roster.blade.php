@extends('layouts.master')

@section('title')
@parent
| Roster
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Roster</h2>
    </div>
</div>

    <div class="container">
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a data-toggle="tab" href="#home">Home Controllers</a></li>
            <li><a data-toggle="tab" href="#visit">Visiting Controllers</a></li>
        </ul>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th width="20%">Name</th>
                                        <th width="5%">Rating</th>
                                        <th width="10%">Status</th>
                                        <th width="13%">Clearance Delivery</th>
                                        <th width="13%">Ground</th>
                                        <th width="13%">Local Control</th>
                                        <th width="13%">Approach/Departure</th>
                                        <th width="13%">Enroute</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($homecontroller as $h)
                                    <tr>

                                        @if(Auth::check())
                                        @if(Auth::user()->can('profile'))
                                            <td><a href="/profile/{{$h->id}}">{{{$h->backwards_name}}}</a></td>
                                        @else
                                        <td>{{{$h->backwards_name}}}</td>
                                        @endif
                                    @else
                                        <td>{{{$h->backwards_name}}}</td>
                                    @endif
                                        <td>{{{$h->rating_short}}}</td>
                                        <td>
                                            @if($h->loa == '1') <span class="label label-danger">LOA</span> @elseif($h->hasStaff()) <span class="label label-info">{{$h->userFirstStaff()}}</span> @elseif($h->hasTrainingStaff()) <span class="label label-success">{{$h->roles->first()->name}}</span> @else <span class="label label-success">Active</span> @endif
                                        </td>
                                        @if($h->del_cert === "Minor Training")<td bgcolor="#ffff00">
					@elseif($h->del_cert === "Minor Certified")<td bgcolor="#8c8cff">
					@elseif($h->del_cert === "Major Training")<td bgcolor="#adffad">
                                        @elseif($h->del_cert === "Major Certified")<td bgcolor="#68ff68">
					@else<td>@endif{{{$h->del_cert}}}</td>
                                        
					@if($h->gnd_cert === "Minor Training")<td bgcolor="#ffff00">
                                        @elseif($h->gnd_cert === "Minor Certified")<td bgcolor="#8c8cff">
                                        @elseif($h->gnd_cert === "Major Training")<td bgcolor="#adffad">
                                        @elseif($h->gnd_cert === "Major Certified")<td bgcolor="#68ff68">
                                        @else<td>@endif{{{$h->gnd_cert}}}</td>

                                        @if($h->twr_cert === "Minor Training")<td bgcolor="#ffff00">
                                        @elseif($h->twr_cert === "Minor Certified")<td bgcolor="#8c8cff">
                                        @elseif($h->twr_cert === "Major Training")<td bgcolor="#adffad">
                                        @elseif($h->twr_cert === "Major Certified")<td bgcolor="#68ff68">
                                        @else<td>@endif{{{$h->twr_cert}}}</td>

                                        @if($h->app_cert === "Minor Training")<td bgcolor="#ffff00">
                                        @elseif($h->app_cert === "Minor Certified")<td bgcolor="#8c8cff">
                                        @elseif($h->app_cert === "Major Training")<td bgcolor="#adffad">
                                        @elseif($h->app_cert === "Major Certified")<td bgcolor="#68ff68">
                                        @else<td>@endif{{{$h->app_cert}}}</td>
                                        
					@if($h->ctr_cert === "Training")<td bgcolor="#ffff00">
					@elseif($h->ctr_cert === "Certified")<td bgcolor="#68ff68">
					@elseif($h->ctr_cert === "Oceanic")<td bgcolor="68ff68">
					@else<td>@endif{{{$h->ctr_cert}}}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6">No Home Controllers</td>
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
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th width="20%">Name</th>
                                        <th width="5%">Rating</th>
                                        <th width="10%">Status</th>
                                        <th width="13%">Clearance Delivery</th>
                                        <th width="13%">Ground</th>
                                        <th width="13%">Local Control</th>
                                        <th width="13%">Approach/Departure</th>
                                        <th width="13%">Enroute</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($visitcontroller as $v)
                                    <tr>
                                          @if(Auth::check())
                                              @if(Auth::user()->can('profile'))
                                                  <td><a href="/profile/{{$v->id}}">{{{$v->backwards_name}}}</a> from {{{$v->visitor_from}}}</td>
                                              @else
                                                  <td>{{{$v->backwards_name}}} from {{{$v->visitor_from}}}</td>
                                              @endif
                                          @else
                                          <td>{{{$v->backwards_name}}} from {{{$v->visitor_from}}}</td>
                                          @endif
                                          <td>{{{$v->rating_short}}}</td>
                                          <td>
                                              @if($v->loa == '1') <span class="label label-danger">LOA</span> @else <span class="label label-success">Active</span> @endif
                                          </td>
                                        @if($v->del_cert === "Minor Training")<td bgcolor="#ffff00">
                                        @elseif($v->del_cert === "Minor Certified")<td bgcolor="#8c8cff">
                                        @elseif($v->del_cert === "Major Training")<td bgcolor="#adffad">
                                        @elseif($v->del_cert === "Major Certified")<td bgcolor="#68ff68">
                                        @else<td>@endif{{{$v->del_cert}}}</td>
                                        
                                        @if($v->gnd_cert === "Minor Training")<td bgcolor="#ffff00">
                                        @elseif($v->gnd_cert === "Minor Certified")<td bgcolor="#8c8cff">
                                        @elseif($v->gnd_cert === "Major Training")<td bgcolor="#adffad">
                                        @elseif($v->gnd_cert === "Major Certified")<td bgcolor="#68ff68">
                                        @else<td>@endif{{{$v->gnd_cert}}}</td>

                                        @if($v->twr_cert === "Minor Training")<td bgcolor="#ffff00">
                                        @elseif($v->twr_cert === "Minor Certified")<td bgcolor="#8c8cff">
                                        @elseif($v->twr_cert === "Major Training")<td bgcolor="#adffad">
                                        @elseif($v->twr_cert === "Major Certified")<td bgcolor="#68ff68">
                                        @else<td>@endif{{{$v->twr_cert}}}</td>

                                        @if($v->app_cert === "Minor Training")<td bgcolor="#ffff00">
                                        @elseif($v->app_cert === "Minor Certified")<td bgcolor="#8c8cff">
                                        @elseif($v->app_cert === "Major Training")<td bgcolor="#adffad">
                                        @elseif($v->app_cert === "Major Certified")<td bgcolor="#68ff68">
                                        @else<td>@endif{{{$v->app_cert}}}</td>
                                        
                                        @if($v->ctr_cert === "Training")<td bgcolor="#ffff00">
                                        @elseif($v->ctr_cert === "Certified")<td bgcolor="#68ff68">
                                        @elseif($v->ctr_cert === "Oceanic")<td bgcolor="68ff68">
                                        @else<td>@endif{{{$v->ctr_cert}}}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                      <td colspan="6">No Visiting Controllers</td>
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

@stop

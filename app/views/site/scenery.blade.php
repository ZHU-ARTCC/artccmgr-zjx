@extends('layouts.master')

@section('title')
@parent
| Scenery
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Scenery</h2>
    </div>
</div>

<div class="container">
		<ul class="nav nav-tabs nav-justified">
			<li><a data-toggle="tab" href="#home">FSX/P3D</a></li>
            <li><a data-toggle="tab" href="#visit">X-Plane</a></li>
		</ul>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <br />
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="25%">Name</th>
                                        <th width="65%">Description</th>
                                        <th width="10%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($fsx as $f)
                                    <tr>
                                      <td>{{{$f->name}}}</td>
                                        @if($f->description == '0')
                                        <td><center>No Description Available</center></td>
                                        @else
                                        <td>{{$f->description}}</td>
                                        @endif
                                      <td><a href="{{$f->link}}" class="btn btn-primary simple-tooltip" title="Visit"><i class="fa fa-globe"></i></a></td>
                                    </tr>
                                    @empty
                                    <tr>
                                      <td colspan="3"><center>No Scenery To Show</center></td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="visit" class="tab-pane fade in">
                <br />
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="25%">Name</th>
                                        <th width="65%">Description</th>
                                        <th width="10%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($xpl as $x)
                                    <tr>
                                      <td>{{{$x->name}}}</td></td>
                                        @if($x->description == '0')
                                        <td><center>No Description Available</center></td>
                                        @else
                                        <td>{{$x->description}}</td>
                                        @endif
                                      <td><a href="{{$x->link}}" class="btn btn-primary simple-tooltip" title="Visit"><i class="fa fa-globe"></i></a></td>
                                    </tr>
                                    @empty
                                    <tr>
                                      <td colspan="3"><center>No Scenery To Show</center></td>
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
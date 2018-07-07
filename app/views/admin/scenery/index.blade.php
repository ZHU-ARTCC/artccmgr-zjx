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
                                        <th width="30%"><center>Name</center></th>
                                        <th width="60%"><center>Description</center></th>
                                        <th width="10%"><center>Actions</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($fsx as $f)
                                    <tr>
                                      <td>{{{$f->name}}}</td>
                                      <td>{{$f->description}}</td>
                                      <td><a href="/admin/scenery/{{$f->id}}/edit" style="display:inline-block" class="btn btn-success btn-sm simple-tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                          {{Form::open(['action'=>['SceneryController@destroy', $f->id], 'method' => 'delete', 'style'=>'display:inline-block'])}}
                                                <button type="submit" class="btn btn-danger btn-sm simple-tooltip" title="Delete"><i class="fa fa-times"></i></button>
                                            {{Form::close()}}</td>
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
                                        <th width="30%"><center>Name</center></th>
                                        <th width="50%"><center>Description</center></th>
                                        <th  width="20%"><center>Actions</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($xpl as $x)
                                    <tr>
                                      <td><center>{{{$x->name}}}</center></td>
                                      <td><center>{{$x->description}}</center></td>
                                      <td><a href="/admin/scenery/{{$x->id}}/edit" style="display:inline-block" class="btn btn-success btn-sm simple-tooltip" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                          {{Form::open(['action'=>['SceneryController@destroy', $x->id], 'method' => 'delete', 'style'=>'display:inline-block'])}}
                                                <button type="submit" class="btn btn-danger btn-sm simple-tooltip" title="Delete"><i class="fa fa-times"></i></button>
                                            {{Form::close()}}</td>
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
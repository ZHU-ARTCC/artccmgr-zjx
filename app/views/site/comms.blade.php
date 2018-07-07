@extends('layouts.master')

@section('title')
@parent
| Comms
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Communications - Positions and Frequencies</h2>
    </div>
</div>

<div class="container">
		<ul class="nav nav-tabs nav-justified">
			<li class="active"><a data-toggle="tab" href="#comms">General</a></li>
	  		<li><a data-toggle="tab" href="#atis">ATIS</a></li>
	  	</ul>
	  	<div class="tab-content">
		    <div id="comms" class="tab-pane fade in active">
		        <br />
				<div class="row">
					<div class="col-sm-12">
						<p></p>
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th width="10%">Identifier</th>
										<th width="10%">Relief</th>
										<th width="25%">Name</th>
										<th width="15%">Frequency</th>
										<th width="20%">Facility</th>
										<th width="10%">POF Ident</th>
										<th width="10%">ASSR Range</th>
									</tr>
								</thead>
								<tbody>
								@forelse ($comms as $c)
								<tr>
									<td>{{{$c->position}}}</td>
									<td>{{{$c->relief}}}</td>
									<td>{{{$c->name}}}</td>
									<td>{{{$c->frequency}}}</td>
									<td>{{{$c->facility_long}}}</td>
									<td>{{{$c->pofid}}}</td>
									<td>{{{$c->sqstart}}} - {{{$c->sqend}}}</td>
								</tr>
								@empty
			                    <tr>
			                        <td colspan="7"><center>No Positions To Show</center></td>
			                    </tr>
			                    @endforelse
					            </tbody>
					        </table>
						</div>
					</div>
				</div>
			</div>
			<div id="atis" class="tab-pane fade in">
		        <br />
				<div class="row">
					<div class="col-sm-12">
						<p></p>
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th width="25%">Identifier</th>
										<th width="25%">Name</th>
										<th width="25%">Frequency</th>
										<th width="25%">Facility</th>
									</tr>
								</thead>
								<tbody>
								@forelse ($atis as $c)
								<tr>
									<td>{{{$c->position}}}</td>
									<td>{{{$c->name}}}</td>
									<td>{{{$c->frequency}}}</td>
									<td>{{{$c->facility_long}}}</td>
								</tr>
								@empty
			                    <tr>
			                        <td colspan="4"><center>No ATIS's To Show</center></td>
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

@extends('layouts.master')

@section('title')
@parent
| Runways
@stop

@section('content')
<div class="page-heading-two">
	<div class="container">
			<h2>Runways</h2>
		</div>
	</div>
</div>
	
	<div class="container">
		<div class="row">   
			<div class="col-sm-4">
				@if($kmco->type == 'VFR')
				<div class="panel panel-success">
				@elseif($kmco->type == 'MVFR')
				<div class="panel panel-warning">
				@elseif($kmco->type == 'IFR')
				<div class="panel panel-danger">
				@endif
					<div class="panel-heading">
						<h4 class="panel-title">Orlando Intl (MCO)<span class="pull-right"><b>{{{$kmco->type}}}</b></span></h4>
					</div>
					<div class="panel-body">
						Suggested Departure Runways: {{ $kmco->mco_departure_runways }}
						<br />
						Suggested Arrival Runways: {{ $kmco->mco_arrival_runways }}
						<hr>
						<small>{{{$kmco->metar}}}</small>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				@if($kchs->type == 'VFR')
				<div class="panel panel-success">
				@elseif($kchs->type == 'MVFR')
				<div class="panel panel-warning">
				@elseif($kchs->type == 'IFR')
				<div class="panel panel-danger">
				@endif
					<div class="panel-heading">
						<h4 class="panel-title">Charleston Intl (CHS)<span class="pull-right"><b>{{{$kchs->type}}}</b></span></h4>
					</div>
					<div class="panel-body">
						Suggested Departure Runways: {{ $kchs->chs_departure_runways }}
						<br />
						Suggested Arrival Runways: {{ $kchs->chs_arrival_runways }}
						<hr>
						<small>{{{$kchs->metar}}}</small>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				@if($kjax->type == 'VFR')
				<div class="panel panel-success">
				@elseif($kjax->type == 'MVFR')
				<div class="panel panel-warning">
				@elseif($kjax->type == 'IFR')
				<div class="panel panel-danger">
				@endif
					<div class="panel-heading">
						<h4 class="panel-title">Jacksonville Intl (JAX)<span class="pull-right"><b>{{{$kjax->type}}}</b></span></h4>
					</div>
					<div class="panel-body">
						Suggested Departure Runways: {{ $kjax->jax_departure_runways }}
						<br />
						Suggested Arrival Runways:  {{ $kjax->jax_arrival_runways }}
						<hr>
						<small>{{{$kjax->metar}}}</small>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop

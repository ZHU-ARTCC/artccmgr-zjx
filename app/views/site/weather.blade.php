@extends('layouts.master')

@section('title')
@parent
| Weather
@stop

@section('content')
<div class="page-heading-two">
    <div class="container">
        <h2>Weather</h2>
    </div>
</div>

	<div class="container">
		<ul class="nav nav-tabs nav-justified">
			<li class="active"><a data-toggle="tab" href="#metar">METARS</a></li>
	  		<li><a data-toggle="tab" href="#nexrad">NEXRAD</a></li>
			<li><a data-toggle="tab" href="#satellite">Satellite</a></li>
	  		<li><a data-toggle="tab" href="#wind">Wind</a></li>	
	  	</ul>
	  	<div class="tab-content">
		    <div id="metar" class="tab-pane fade-in active">
		        <br />
		        <div class="row">
			        <div class="col-sm-12">
			        	<div class="table-responsive">
				        	<table class="table table-condensed">
						      <thead>
						        <tr>
						          <th width="6%">ICAO</th>
						          <th width="94%">METAR</th>
						        </tr>
						      </thead>
						      <tbody>
						        @foreach($weather as $weather)
						        <tr>
						          <td scope="row">{{$weather->id}}</td>
						          <td>{{$weather->metar}}</td>
						        </tr>
						        @endforeach
						      </tbody>
						    </table>
						</div>
			        </div>
			    </div>
		    </div>
		    <div id="nexrad" class="tab-pane fade-in">
		        <br />
		        <div class="row">
			        <div class="col-sm-12">
			        	<b>Next Generation Radar</b><br>
			        	<img src="http://www.weather.unisys.com/radar/wrad_se.gif" width="100%">
			        	<p>This is a composite plot of the radar summary, echo tops, storm movement, TVS and MESO signatures and watch boxes. The radar summary is color coded by precip type. Greens, yellows and reds are rain. Pinks are mixed precipitation (freezing rain, sleet). Blues are snow. NOTE: Radar data is susceptible to a phenomena called anomalous propagation. This generally happens at night and appears as a area of 20 dBZ echos (darkest green) which is centered around each radar site and expands with time. To try and reduce the problem, low echo values near the radar sites have been removed.</p>
			        </div>
			    </div>
		    </div>
		    <div id="satellite" class="tab-pane fade-in">
		        <br />
		        <div class="row">
			        <div class="col-sm-6">
			        	<b>GOES 13 Visible Radar</b><br>
						<img src="http://www.weather.unisys.com/satellite/sat_vis_se_loop-12.gif" width="100%">
						<br />
						<p>This image is the equivalent of taking a black and white photo of the earth. The bright areas show where the sun is being reflected back into space as a result of clouds or snow cover. Clouds and snow show up white. The thicker the cloud, the brighter the color. Land surfaces show up as gray and ocean surfaces nearly black. The major limitation to visible imagery is that it is only valid during daylight.</p>
			        </div>
			        <div class="col-sm-6">
			        	<b>GOES 13 Infrared 12 Hour Loop</b><br>
			        	<img src="http://www.weather.unisys.com/satellite/sat_ir_enh_se_loop-12.gif" width="100%">
			        	<br />
			        	<p>This type of image shows heat based radiation from the infrared spectrum. In other words, the warmer the surface, the more infrared radiation it emits. For a satellite image, cooler surfaces are bright and warmer surfaces are dark. Since the atmosphere cools as you increase in altitude, clouds would show up as bright areas and land surfaces as dark areas. In addition, low clouds will be more gray and higher clouds will show up more white. Tall thunderstorm clouds will show up as bright white and fog will be hard to discern from land areas. A large advantage of IR is that you can view it 24 hours a day.</p>
			        </div>
			    </div>
			</div>
		    <div id="wind" class="tab-pane fade-in">
		        <br />
				<div class="row">
			        <div class="col-sm-12">
			        	<b>Surface Data</b><br>
			        	<img src="http://weather.unisys.com/surface/sfc_se.gif" width="100%">
			        	<br />
			        	<p>This is a composite map contain the following analyses: radar summary (color filled areas), surface data plot (composite station model), frontal locations (in various bold lines) and pressure contours (in thin blue lines).</p>
			        </div>
			    </div>
		    </div>
		</div>
	</div>

@stop
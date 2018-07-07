@extends('layouts.master')

@section('title')
@parent
| Home
@stop

@section('content')
<div class="rotating-banner">
	<div class="container">
		<div class="about-us-one">
			<div class="row">
				<div class="col-sm-9">
					<h2>Virtual Houston ARTCC</h2>
<p style="text-align:justify">Welcome to the Virtual Houston Air Route Traffic Control Center on the VATSIM Network. Encompassing an airspace of approximately 280,000 square miles located in portions of Texas, Louisiana, Mississippi and Alabama, Houston has a diverse selection of destinations for you to choose from.</p>

<p style="text-align:justify">From New Orleans, to the airports of Houston, Austin, San Antonio and many other cities along the Gulf of Mexico we know you will find a destination to your liking within our airspace. In addition we operate the Houston Oceanic Station covering the Gulf of Mexico and providing services to pilots transitioning this body of water. We hope you will enjoy your visit and come back and see us again soon.</p>

<p style="text-align:justify">All information contained on these pages are for flight simulation use only on the VATSIM network and shall not be used for real world navigation or aviation purposes. This site is in no way affiliated with the FAA, actual ZHU ARTCC or any other governing aviation agency or group. All content contained herein is approved for use on the VATSIM network.</p>
				</div>
				<div class="col-sm-3 online-sectors">
					<table class="table table-condensed">
                                                <tr>
                                                        <th width="40%">Oceanic</th>
                                                        <td width="60%" class="<?= !empty($online->getOceanic()) ? 'online' : 'offline' ?>">
                                                                <span>
                                                                        @if(!empty($online->getOceanic()))
                                                                        ONLINE
                                                                        @else
                                                                        OFFLINE
                                                                        @endif
                                                                </span>
                                                        </td>
                                                </tr>
						<tr>
							<th width="40%">Enroute</th>
							<td width="60%" class="<?= !empty($online->getCenter()) ? 'online' : 'offline' ?>">
								<span>
									@if(!empty($online->getCenter()))
									ONLINE
									@else
									OFFLINE
									@endif
								</span>
							</td>
						</tr>
						<tr>
							<th>I90 Tracon</th>
							<td class="<?= !empty($online->I90()) ? 'online' : 'offline' ?>">
								<span>
									@if(!empty($online->I90()))
									ONLINE
									@else
									OFFLINE
									@endif
								</span>
							</td>
						</tr>
						<tr>
							<th>IAH ATCT</th>
							<td class="<?= !empty($online->getIAH()) ? 'online' : 'offline' ?>">
								<span>
									@if(!empty($online->getIAH()))
									<?= implode("/", $online->getIAH()) ?>
									@else
									OFFLINE
									@endif
								</span>
							</td>
						</tr>
						<tr>
							<th>HOU ATCT</th>
							<td class="<?= !empty($online->getHOU()) ? 'online' : 'offline' ?>">
								<span>
									@if(!empty($online->getHOU()))
									<?= implode("/", $online->getHOU()) ?>
									@else
									OFFLINE
									@endif
								</span>
							</td>
						</tr>
						<tr>
							<th>AUS ATCT</th>
							<td class="<?= !empty($online->getAUS()) ? 'online' : 'offline' ?>">
								<span>
									@if(!empty($online->getAUS()))
									<?= implode("/", $online->getAUS()) ?>
									@else
									OFFLINE
									@endif
								</span>
							</td>
						</tr>
                                                <tr>
                                                        <th>MSY ATCT</th>
                                                        <td class="<?= !empty($online->getMSY()) ? 'online' : 'offline' ?>">
                                                                <span>
                                                                        @if(!empty($online->getMSY()))
                                                                        <?= implode("/", $online->getMSY()) ?>
                                                                        @else
                                                                        OFFLINE
                                                                        @endif
                                                                </span>
                                                        </td>
                                                </tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
		@if($announcements)
		<br />
			@foreach($announcements as $announcements)
				@if($announcements->class == 1)
				<div class="alert alert-success" role="alert">{{$announcements->message}}<p><b>{{$announcements->admin->full_name}}</b></div>
				@elseif($announcements->class == 2)
				<div class="alert alert-warning" role="alert">{{$announcements->message}}<p><b>{{$announcements->admin->full_name}}</b></div>
				@elseif($announcements->class == 3)
				<div class="alert alert-danger" role="alert">{{$announcements->message}}<p><b>{{$announcements->admin->full_name}}</b></div>
				@endif
			@endforeach
		<div class="divider-1"></div>
		@endif
	<div class="row">
		<div class="col-lg-6">
			<h2><i class="fa fa-newspaper-o"></i> News</h2>
			@forelse($news as $n)
			<h5>{{$n->poster_time}}<div style="padding-left: 10%; display: inline;"><a href="https://www.zhuartcc.org/forum/index.php?topic={{$n->id_topic}}.0">{{$n->subject}}</a></div></h5>
			@empty
			<center><h5><i>No News Announcements to display</i></h5></center>
			@endforelse
		</div>
		<div class="col-lg-6" style="overflow: auto; height:500px">
			<h2><i class="fa fa-calendar"></i> Events</h2>
			@forelse ($events as $e)
				@if($e->banner_link == '')
				<h5><a href="/event/{{{$e->id}}}">{{{$e->title}}}</a></h5>
				@else
				<p><a href="/event/{{{$e->id}}}"><img width="100%" src="{{{$e->banner_link}}}"></a></p>
				@endif
			@empty
				<p>No Events Scheduled</p>
			@endforelse
		</div>
	</div>
	<div class="divider-1"></div>


	<div class="row" id="tableData">
		<div class="col-md-6 weather">
			<h2><i class="fa fa-cloud"></i> Weather</h2>
			<center><h2><i class="fa fa-refresh fa-spin"></i></h2></center>
		</div>
		<div class="col-md-6">
			<h2><i class="fa fa-search"></i> Who's Online?</h2>
			<center><h2><i class="fa fa-refresh fa-spin"></i></h2></center>
		</div>
	</div>
	<div class="divider-1"></div>
	<div class="row">
		<div class="col-md-6">
			<h2>Top 5 Total This Month</h2>
			<div class="table-responsive">
				<table class="table table-bordered text-center">
					<thead>
						<th><center>Name</center></th>
						<th><center>Time</center></th>
					</thead>
					<tbody>
						@foreach($currentTop5 as $controller)
						<tr>
							<td>{{{ $controller->first_name . " " . $controller->last_name }}}</td>
							<td>{{{ $controller->duration_time }}}
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
                <div class="col-md-6">
                        <h2>Top 5 Center This Month</h2>
                        <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                        <thead>
                                                <th><center>Name</center></th>
                                                <th><center>Time</center></th>
                                        </thead>
                                        <tbody>
                                                @foreach($currentTop5Enroute as $controller)
                                                <tr>
                                                        <td>{{{ $controller->first_name . " " . $controller->last_name }}}</td>
                                                        <td>{{{ $controller->duration_time }}}
                                                </tr>
                                                @endforeach
                                        </tbody>
                                </table>
                        </div>
                </div>
                <div class="col-md-6">
                        <h2>Top 5 Approach This Month</h2>
                        <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                        <thead>
                                                <th><center>Name</center></th>
                                                <th><center>Time</center></th>
                                        </thead>
                                        <tbody>
                                                @foreach($currentTop5Approach as $controller)
                                                <tr>
                                                        <td>{{{ $controller->first_name . " " . $controller->last_name }}}</td>
                                                        <td>{{{ $controller->duration_time }}}
                                                </tr>
                                                @endforeach
                                        </tbody>
                                </table>
                        </div>
                </div>
                <div class="col-md-6">
                        <h2>Top 5 Local This Month</h2>
                        <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                        <thead>
                                                <th><center>Name</center></th>
                                                <th><center>Time</center></th>
                                        </thead>
                                        <tbody>
                                                @foreach($currentTop5Local as $controller)
                                                <tr>
                                                        <td>{{{ $controller->first_name . " " . $controller->last_name }}}</td>
                                                        <td>{{{ $controller->duration_time }}}
                                                </tr>
                                                @endforeach
                                        </tbody>
                                </table>
                        </div>
                </div>
	</div>
</div>

<script src="/assets/front/tables.js"></script>

@stop

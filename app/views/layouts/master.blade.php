<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">

	<title>
		@section('title')
			vZHU ARTCC
		@show
	</title>

	<meta name="description" content="VATSIM's Houston ARTCC">
	<meta name="keywords" content="VATSIM,VATUSA,ZHU,Houston,Austin,New Orleans,Houston ARTCC,Virtual ATC">
	<meta name="author" content="Matt Bozwood-Davies">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="image/png" href="/assets/images/icons/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="/assets/images/icons/favicon-16x16.png" sizes="16x16" />

	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="/assets/css/magnific-popup.min.css">
	<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/assets/css/revolutionslider.min.css">
	<link rel="stylesheet" href="/assets/css/theme.css">
	<link rel="stylesheet" href="/assets/css/tipped.css">
	<link rel="stylesheet" href="/assets/css/main.css">
	<link rel="stylesheet" href="/assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/r/bs/dt-1.10.9,r-1.0.7/datatables.min.css">
	<style type="text/css"></style>

	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/jquery-ui.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			Tipped.create('.simple-tooltip');
		});

		$(document).ready(function(){
			$('#flash-modal').modal('show');
		});
	</script>

</head>
<body>

	<div class="outer">
		<div class="header-2">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-md-offset-1">
					  <img src="{{ asset('assets/images/zhulogo.png') }}" height="64" width="179">
					</div>
					<div class="col-md-8">
						<div class="navy">
							<ul>
								<li><a href="/">Home</a></li>
								<li><a>Pilots</a>
									<ul>
										<li><a href="http://www.aircharts.org" target="_blank">Charts</a></li>
										<li><a href="/weather">Weather</a></li>
										<li><a href="/scenery">Scenery</a></li>
										<li><a href="/airports">Airports</a></li>
										<li><a href="http://www.flightaware.com/statistics/ifr-route/" target="_blank">IFR Routes</a></li>
									</ul>
								</li>
								<li><a>Controllers</a>
									<ul>
										<li><a href="/staff">Staff</a></li>
										<li><a href="/roster">Roster</a></li>
										<li><a href="/documents">Documents</a></li>
										@if(Auth::check())
										<li><a href="/atcast">ATCast Videos</a></li>
										@endif
										<li><a href="/comms">Communications</a></li>
										@if(!Auth::check())
										<li><a href="/visit">Visiting Application</a></li>
										@endif
										<li><a href="/statistics">Controller Stats</a></li>
									</ul>
								</li>
								<li><a href="/feedback">Feedback</a></li>
								<li><a href="/forum">Forum</a></li>
								<li><a href="/privacy-policy">Privacy Policy</a></li>
								@if(Auth::check())
								<li><a>{{Auth::user()->full_name}} - ({{Auth::user()->rating_short}})</a>
									<ul>
										<li><a href="/profile">My Profile</a></li>
										<li><a>Training</a>
											<ul>
												@if(Auth::user()->canTrain == 1)
												<li><a href="/training/mentoravail">Mentor Availability</a></li>
												<li><a href="/training">Management</a></li>
												@elseif(Auth::user()->canTrain == 0)
												<li><a href="#">Training Disabled</a></li>
												@endif
												<li><a href="/training/notes">History</a></li>
												<!--<li><a href="/trainingcenter">Training Center</a></li>-->
											</ul>
										</li>
										<li role="separator" class="divider-1"></li>
										@if(Auth::user()->can('roster_edit'))
										<li><a>Roster</a>
											<ul>
												<li><a href="/admin/roster">View Roster</a></li>
												@if(Auth::user()->can('roster_add'))
												<li><a href="/admin/roster/create">Add Controller</a></li>
												@endif
												@if(Auth::user()->can('visit'))
												<li><a href="/admin/visitreq">Visiting Requests</a></li>
												@endif
											</ul>
										</li>
										@endif
										@if(Auth::user()->can('docs') || Auth::id() == 1146612)
										<li><a>Documents</a>
											<ul>
												<li><a href="/admin/docs">Documents</a></li>
												<li><a href="/admin/docs/create">Add Document</a></li>
											</ul>
										</li>
										@endif
										@if(Auth::user()->can('events'))
										<li><a>Events</a>
											<ul>
												<li><a href="/admin/events">Events</a></li>
												<li><a href="/admin/events/create">Add Event</a></li>
											</ul>
										</li>
										@endif
										@if(Auth::user()->can('scenery'))
										<li><a>Communications</a>
											<ul>
												<li><a href="/admin/comms">Management</a></li>
												<li><a href="/admin/comms/atis">ATIS Management</a></li>
											</ul>
										</li>
										@endif
										@if(Auth::user()->can('scenery'))
										<li><a>Scenery</a>
											<ul>
												<li><a href="/admin/scenery">Scenery</a></li>
												<li><a href="/admin/scenery/create">Add Scenery</a></li>
											</ul>
										</li>
										@endif
										<li role="separator" class="divider-1"></li>
										@if(Auth::user()->can('mentor'))
										<li><a>Instructing</a>
											<ul>
													<li><a href="/admin/mentor/files">Training Files</a></li>
												<li role="separator" class="divider-1"></li>
													<li><a href="/admin/mentor/avail">Manage Your Availability</a></li>
													<li><a href="/admin/mentor/requests">View Training Sessions</a></li>
												<li role="separator" class="divider-1"></li>
													<li><a href="/admin/mentor/students">Find Student Notes</a></li>
													<li><a href="/admin/mentor/addnote">Add Training Note</a></li>
													<li><a href="/admin/mentor/checklists">Training Checklists</a></li>
											</ul>
										</li>
										@endif
										@if(Auth::user()->can('snrstaff') || Auth::user()->can('scenery') || Auth::user()->can('staff'))
										<li><a>Admin</a>
											<ul>
												@if(Auth::user()->can('staff'))
												<li><a href="/admin/broadcast">Broadcast Email</a></li>
												<li><a href="/admin/activitylog">Site Activity</a></li>
												@endif
												@if(Auth::user()->hasRole('ATM') || Auth::user()->hasRole('DATM'))
												<li><a href="/admin/rostertidy">Roster Purge Assister</a></li>
												@endif
												@if(Auth::user()->can('snrstaff'))
												<li><a href="/admin/mentorhist">Mentor History</a></li>
												<li><a href="/admin/feedback">Pending Feedback</a></li>
												@endif
												@if(Auth::user()->can('scenery'))
												<li><a href="/admin/announcements">Announcements</a></li>
												@endif
											</ul>
										</li>
										@endif
										<li role="separator" class="divider-1"></li>
										<li><a href="/logout">Logout</a></li>
									</ul>
								</li>
								@else
								<li><a href="/login">Login</a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main-content">
	@yield('content')
	</div>

	<!-- Site Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="list-inline pull-right">
						<li>For entertainment purposes only.  Do not use for real world purposes. Part of the <a href="http://www.vatsim.net">VATSIM</a> Network.  <a href="/privacy-policy">Privacy Policy</a>.</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	@if(isset($message))
	<div class="modal fade" id="flash-modal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<p><strong>{{{$message}}}</strong></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	@endif

	@if(count($errors) > 0)
	<div class="modal fade" id="flash-modal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					@foreach($errors->all() as $error)
					<p><strong>{{ $error }}</strong></p>
					@endforeach
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	@endif

	<script src="/assets/js/tipped.js"></script>
	<script src="/assets/js/home.js"></script>
	<script src="https://cdn.datatables.net/r/bs/dt-1.10.9,r-1.0.7/datatables.min.js"></script>
	<script src="/assets/js/jquery.countTo.js"></script>
	<script src="/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="/assets/js/jquery.tablesorter.js"></script>
	<script src="/assets/js/jquery.themepunch.revolutionslider.min.js"></script>
	<script src="/assets/js/jquery.themepunch.tools.min.js"></script>
	<script src="/assets/js/owl.carousel.min.js"></script>
	<script src="/assets/js/placeholders.min.js"></script>
	<script src="/assets/js/plupload.js"></script>
	<script src="/assets/js/site.js"></script>
	<script src="/assets/js/waypoints.min.js"></script>
	<script src="/assets/js/moment.min.js"></script>
	<script src="/assets/js/bootstrap-datetimepicker.min.js"></script>

</body>
</html>

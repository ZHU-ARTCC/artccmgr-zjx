@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Radar Identification</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Primary Targets</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <UL>
                               <b><p>A Primary target is one that does not have any information associated with it. There is an absence of information such as callsign, altitude, grounspeed, etc.</p></b>

                                <p><img src="/assets/trainingcenter/images/primary.png" /><p/>
                            <li>Visual within 1 mile of the Departure Runway - This method can only be used if a rolling call was given to you by Tower, or if Tower pushed the flight strip to you after giving the aircraft the takeoff clearance
                            <li>Position Correlation - This involves a pilot reporting his position to you, and you see his is the only aircraft in the vicinity of the navaid/fix/airport/etc. If there are multiple aircraft in the vicinity, you may need to use this method combined with the third method
                            <li>Identifying Turns - This is a turn of 30 degrees or greater given to a primary target to facilitate radar identification. "TURN LEFT/RIGHT (number of degrees) FOR RADAR IDENTIFICATION".
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Secondary Targets</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <UL>
                               <b><p>A Secondary target is one that has this additional information.</p></b>
                            <p><img src="/assets/trainingcenter/images/secondary.png" /><p/>
                            <li>Ident - Have the aircraft IDENT. "(callsign) IDENT"
                            <li>Squawk Discrete/Non-Discrete Code - Have the aircraft squawk either a discrete (unique) or non-discrete code. You must observe the change for this method of radar identification to be valid. "(callsign) SQUAWK (code)".Squawk Standby then Normal - Instruct the pilot to squawk standby, and once you observe the loss of the datatag, instruct him to squawk Normal. As with the last method, you must observe the datatag change for this method to be valid. "(callsign) SQUAWK STANDBY" "(callsign) SQUAWK NORMAL"
                            <li>Squawk Standby then Normal - Instruct the pilot to squawk standby, and once you observe the loss of the datatag, instruct him to squawk Normal. As with the last method, you must observe the datatag change for this method to be valid. "(callsign) SQUAWK STANDBY" "(callsign) SQUAWK NORMAL"
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
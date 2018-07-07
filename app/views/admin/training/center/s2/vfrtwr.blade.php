@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>VFR Tower</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Introduction</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LnIIkL4AJNc"></iframe>
                            </div>
                            <p>The above clip is a special position created at KOSH that was specifically created to visually sequence aircraft inbound to KOSH for Airventure Aviation Celebration. This is not a normal position and does not follow normal phraseology.</p>
                            <p>VFR Towers are their own special monsters and are different than a majority of major towers on VATSIM. These towers are very much self run and less reliant on radar positions and more of looking out the windows. VFR aircraft are a special creature to control as well.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">VFR Departures</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>VFR departures from Class B/C airports are treated the same as IFR departures. Clear them for takeoff and send them to departure once airborne.</p>
                            <p>VFR departures from Class D airports are different. You have two options on how to handle them:</p>
                            <ul>
                            <li><strong>Pattern Departure</strong>: This is an instruction that tells an aircraft to utilize the traffic pattern to depart. They will fly the pattern as normal until they reach the leg instructed to use for departure where they will keep climbing and depart the airspace. Phraseology is "[left/right] [pattern leg] departure approved". Examples: "LEFT DOWNWIND DEPARTURE APPROVED" "STRAIGHT OUT DEPARTURE APPROVED" "RIGHT CROSSWIND DEPARTURE APPROVED", etc. It is best to pick a leg that will point them in the general direction of the way they want to go. For example if you're on a north/south runway and the pilot's route of flight is to the south, a left or right downwind departure would be preferred.</li>
                            <li><strong>Directional Departure</strong>: Informs the aircraft departure in the specified direction is approved at their discretion. "(direction) departure approved". Examples: "NORTHBOUND DEPARTURE APPROVED", "EASTBOUND DEPARTURE APPROVED", etc.</li>
                            </ul>
                            <p>Once the aircraft has departed from your Class D airspace or is nearing the boundary, issue the phrase "FREQUENCY CHANGE APPROVED".</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">VFR Arrivals</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>For any class airspace airport, instruct an aircraft to enter a leg of the pattern closest to where they are and sequence them. You will learn about sequencing in the next chapter. <strong>Phraseology-</strong> ENTER (left/right) (pattern leg) RUNWAY (runway number).</p>
                            <p>Examples:</p>
                            <ul>
                            <li>Enter left downwind runway 1.</li>
                            <li>Enter right crosswind runway 25.</li>
                            </ul>
                            <br />
                            <p>Landing clearances are issued in the same manner as IFR landing clearances.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">VFR Transitions</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>When working tower, you may get VFR aircraft transitioning through your airspace. If working a Class C or B tower, you may restrict their transition along a geographical area, example along the coastline, river, etc. You may also cap their altitude within Class C and B.</p>
                            <p>If the aircraft is within Charlie or Bravo airspace, and is squawking VFR or not squawking at all, assign the aircraft a beacon code to assist the radar controller with separation. Only radar towers should track this target and inform the aircraft radar contact.</p>
                            <p><em>"(direction) TRANSITION APPROVED" (any other instructions as necessary).</em> Inside Delta airspace, you may respond back with just "Roger".</p>
                            <p>Examples:<br /><br />N462DH, Eastbound Transition Approved along the coast at or below 500.<br /><br />N505ES, Northbound Transition Approved at 2000.</p>
                            <p>Remember, if you modify an aircraft's altitude/assign them a cap, you must tell them to "resume normal VFR altitudes" prior to leaving your airspace.</p>
                            <p>If an aircraft leaves your airspace and is not going back into Charlie/Bravo airspace and not requesting flight following should be told "Squawk and maintain VFR, Frequency change approved." If the aircraft will be within Bravo or Charlie airspace, keep them on their current squawk and switch them to contact the appropriate radar sector through "Contact (facility name) (frequency)".</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
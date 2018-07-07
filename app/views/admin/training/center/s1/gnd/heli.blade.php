@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Helicopter Operations</h2>
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
                            <p>There are 3 types of helicopter ground movements:</p>
                            <ul>
                            <li>Taxi - Wheeled helicopters can receive the same taxi instructions are standard aircraft because they can roll.</li>
                            <li>Air Taxi - Helicopters doing an air taxi (preferred over Hover Taxi) authorizes the pilot to fly at speeds greater than 20 knots and at an altitude normally below 100 feet AGL.</li>
                            <li>Hover Taxi - Helicopters will hover at less than 20 knots in ground effect along the route specified. Hover Taxi is supplemented with <strong>standard</strong> taxi instructions.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Standard Taxi</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Helicopters with wheels are capable of taxiing like fixed wing aircraft on the ground. These helicopters can receive standard taxi instructions to a runway, for example:</p>
                            <p><em>Helicopter423, Runway 16L, <strong>taxi</strong> via B C. Follow the American 737 on Bravo.</em></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Air Taxi</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Air Taxi is the preferred method of movement of helicopters around the airport. It's quicker for the helicopter pilot, consumes less fuel, and the helicopter is not prone to jet blasts from large aircraft.</p>
                            <p>Air Taxiing allows the aircraft to proceed directly from their present position to a point, unless a route is specified and/or restrictions put in place. Thankfully, there is a lot of phraseology available to you as a ground controller that allows you to do just about anything to keep the helicopter from impeding operations.</p>
                            <p><em>Air Taxi<br /><br />[via (direct, as requested, or a specific route)]<br /><br />to (location, heliport, helipad, operating/movement area, active/inactive runway)<br /><br />[avoid (aircraft/vehicles/personnel)<br /><br /><u>Additional instructions, as required,</u><br /><br /> Remain at or below (altitude).<br /><br />Caution (wake turbulence, traffic, or other reasons)<br /><br />Land and contact tower (or switch them when they are hovering over their specified point)<br /><br />Hold for (reason-takeoff clearance, release, landing/taxiing aircraft, etc.)</em></p>
                            <p>Example:<br /><br /> <em>Life Flight 1, Seattle Ground, <strong>Air Taxi</strong> to taxiway intersection Alpha and Charlie, avoid the American 737 on Bravo. Remain at or below 50 feet. Caution wake turbulence from FedEx 747 taxiing via Alpha.</em><br /><br /><em>ABLE 12, Portland Ground, <strong>Air Taxi</strong> via direct to runway 28L. Land and contact tower.</em></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Hover Taxi</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Hover Taxi should be avoided unless requested by a helicopter pilot. Hover taxi leaves the helicopter prone to jet blasts, affects nearby small aircraft from turbulence, consumes a lot of fuel, and is generally not preferred among non-student pilots.</p>
                            <p>The instructions for Hover Taxi are the same as standard taxiing except you substitute the word "Taxi" for "Hover Taxi".</p>
                            <p>Example:<br /><br /> <em>Life Flight 1, Orlando Executive Ground , Runway 7, <strong>hover</strong> taxi via Echo, Echo four, cross runway 13. Give way and follow the Baron on Echo four.</em></p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
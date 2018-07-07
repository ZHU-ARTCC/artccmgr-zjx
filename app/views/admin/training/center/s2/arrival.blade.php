@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Arrival Procedures</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Arrival Procedures</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>IFR Arrivals are separated and sequenced by a radar controller whether it be Center or Approach. Local Control needs only issue a landing clearance and ensure that separation remains on final within Local's airspace. VFR sequencing will be covered in another chapter.</p>
                            <p>The following information needs to be included in a landing clearance:</p>
                            <ul>
                            <li>Wind - Optional, unless a tailwind component exists or the aircraft is a military aircraft.</li>
                            <li>Runway in use if more than one runway is active.</li>
                            <li>Low level windshear advisories when available.</li>
                            <li>Braking action reports when available and the braking action is reported as "poor" or "nil".</li>
                            <li>Clearance to land.</li>
                            </ul>
                            <p><strong>Phraseology-</strong> Wind [surface wind], runway [runway], cleared to land.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Climb Out/Missed Approach</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Aircraft conducting a full stop approach may declare a missed approach. Upon declaring a missed approach, Local has two options. Option 1, only applicable when aircraft is conducting an instrument approach, Local acknowledges with a "Roger" and switch them to departure. This option will result in the pilot commencing with the filed missed approach procedures as according to the instrument approach plate. Option 2 is to issue climb out instructions and send them to departure. For Option 2, prior coordination is required unless other procedures exist through an SOP or LOA. For Option 1, advise departure that the aircraft is going missed and doing the missed approach procedure.</p>
                            <p>Aircraft cleared touch and go, low approach or stop and go shall receive climb out instructions prior to beginning final descent. Example Phraseology--<em>Upon completion of approach, fly runway heading, climb and maintain 800.</em> After the approach is completed, you may issue additional instructions prior to changing frequency, or you can give them the final climb out at the same time. Coordinate with departure for climb out instructions if not defined in SOPs.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Restrictions</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Aircraft on final may not receive a landing clearance with an aircraft holding in position. Advise the aircraft on final to "Continue Approach".</p>
                            <p>Aircraft on final may not receive a landing clearance with a departing aircraft on the runway. Local may anticipate separation so that the arriving aircraft does not cross the landing threshold until the departing aircraft has passed the departure end. Advise the aircraft on final to "Continue Approach".</p>
                            <p>When the arriving aircraft is a helicopter, visual separation may be applied.</p>
                            <p>On intersecting runways, separate an arriving aircraft from another aircraft using another runway by one of the following:</p>
                            <ul>
                            <li>The preceeding aircraft has departed and passed the intersection/flight path or is airborne and is turning to avoid conflict.</li>
                            <li>A preceeding arriving aircraft is clear of the landing runway, completed landing roll and will hold short of the intersection/flight path or has passed the intersection/flight path.</li>
                            </ul>
                            <p>Low approaches with a restricted altitude, for example at or above 500, may be issued except over aircraft holding in position or a departing aircraft.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Runway Exiting</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Instruct an aircraft where to turn-off the runway, after landing and when appropriate advise the aircraft to hold short of a runway or taxiway if required for traffic. </p>
                            <p><strong>Phraseology</strong>- Turn left/right (taxiway/runway) |OR| If able, turn left/right (taxiway/runway) |and if required| hold short of (runway/taxiway).</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">LAHSO</a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Land and Hold Short Operations are used when there are 2 runways that cross. We will demonstrate this using Charleston AFB.</p>
                            <p><img src="/assets/images/chslahso.PNG" width="50%" /></p>
                            <p>Charleston has LAHSO operations at the crossing point of 15/33 and 3/21. We use LAHSO when there will be 2 aircraft landing at the same time on crossing runways.</p>
                            <p><strong>Phraseology</strong>: (Landing Clearance as above), <strong>HOLD SHORT OF RUNWAY</strong> [runway number], [traffic type and information], [x] feet available. Where x is the length rounded down to the nearest 50 feet.</p>
                            <p>Example: <em>Delta 275, Runway 15 cleared to land, hold short of runway 21, 5,700 feet available. Traffic is a C-one thirty on a 2 mile final for the crossing runway</em>.</p>
                            <p>If a pilot does not readback the LAHSO operations, advise them to readback the LAHSO.</p>
                            <br />
                            <p>Pilots are expected to decline a LAHSO clearance if they determine it will compromise safety.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
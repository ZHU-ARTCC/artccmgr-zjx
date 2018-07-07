@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Departure Procedures</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">IFR Releases</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Launching IFR aircraft often time requires a release from the departure radar controller. The reason behind this is they often times have other aircraft that are in the vicinity and space needs to be created to work in the new departure. Some local procedures have automatic releases in effect until departure says otherwise, but it's always best to coordinate this ahead of time. Currently all of your Bravo and Charlie fields are utilizing automatic releases.</p>
                            <p><strong>Class Delta Fields Always require a release.</strong></p>
                            <p>Example: <br /><em>Tower: Departure, (your facility) Tower, request release.<br /> Departure: Departure<br /> Tower: Request release, United 151, JFK, runway 5L.<br /> Departure: United 151, Heading 090, released. AW<br /> Tower: SY</em></p>
                            <p>In the above, the aircraft was released with a departure heading 090. Other responses is "Released" on runway heading or a heading you select for separation, and "Hold for release" which means just like it sounds, the aircraft is currently not authorized to depart until you get a call back.</p>

                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Takeoff Clearance</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Once the aircraft is released, scan the runway and the arrival corridor. If you have adequate spacing and the runway is clear and appropriate wake turbulence separation has been applied, then clear the aircraft for takeoff.</p>
                            <p>Takeoff clearances consist of the following:</p>
                            <ul>
                            <li>Wind (if applicable) [not "WINDS"] - The current wind, only required to be read when a tailwind component exists OR the aircraft is a military aircraft. If military, you must <strong>always</strong> read the wind. <u>Wind 240 at 3</u></li>
                            <li>Additional instructions, as necessary - This includes a departure heading, example <u>Turn right heading 090</u>.</li>
                            <li>Runway - State the runway the aircraft is departing on. This is optional when only one runway is in use.</li>
                            <li>Clearance - State the phrase <u>Cleared for takeoff</u></li>
                            <li>If a military aircraft other than a cargo or transport aircraft, include the phrase "Change to departure"</li>
                            </ul>
                            <p>Example: United 151, Fly heading 090, runway 5 right, cleared for takeoff.<br /><br />Navy Blue Angel 1 Flight, runway 5 Right, wind 020 at 5, cleared for takeoff. Change to Departure.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Pilot Nav Departures</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Pilot Nav Departures provide a path from the departure point to the exit (transition) point. They are managed by the FMC (Flight Management Computer) as the aircraft lifts off the runway.</p>
                            <p>Take a look at this example from KCHS.</p>
                            <p><img src="http://healthcentraled.com/images/MLTRE2dp.png" alt="" width="50%" /></p>
                            <p>Let's assume that the active runway is RW 15. The FMC once activated will begin a left turn to ANGRE at 560 feet then it will fly the rest of the SID as published.</p>
                            <p>Pilot nav takeoff phraseology encorporates the name of the first FIX in the clearance.</p>
                            <p>EXAMPLE: DAL247 Heavy, Charleston Tower, wind 140@8, RNAV to ANGRE, runway 15, Cleared for Takeoff.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Intersection Departures</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Intersection departures may be initiated by a controller or pilot request. Issue the measured distance from intersection to runway end rounded down to nearest 50 feet to all departing aircraft, if known. In VATSIM this is usually an approximation based on the airport diagram. The other difference is you must specify the intersection location with the Runway number in the takeoff clearance.</p>
                            <p><strong>Example:</strong> "N<em>517CC, runway 8 , at Juliet , approximately eight thousand feet available, cleared for takeoff. Wind zero four zero at one zero. Fly runway heading"</em></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Contact Departure</a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>All IFR aircraft and those VFR aircraft departing a Class C or B field and all  SVFR aircraft shall be instructed to "<strong>Contact Departure"</strong> within 1/2 mile of the departure end of the runway.</p>
                            <p>VRF aircraft remaining in the closed trafic pattern will remain on your frequency.</p>
                            <p>VFR aircraft departing a Class D field not requesting radar services shall remain on tower's frequency until they reach the edge of tower's airspace. At that time advise the aircraft "Leaving my airspace,  Frequency change approved."</p>
                            <p>Aircraft Departing the Class Delta that are IFR or VFR requesting Radar Advisories (Flight Following) will be handed off to departure as above. </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Wake Turbulence</a>
                        </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Wake Turbulence is defined as turbulence that is created by an aircraft that is passing through the atmosphere. The term also includes vortices, thrust stream turbulence, jet blast, jet wash, propeller wash, and rotor wash both on the ground and in the air. Generally, the heavier the aircraft the more wake turbulence that is generated. This occurs in all stages of flight, but is most prominent in the departure and approach phases of flight. Wake Turbulence is unpredictable by nature, and because of this, controllers are not responsible for anticipating its existence or effects. Although Wake Turbulence is not modeled by default in Flight Simulator, we as controllers are still responsible for providing appropriate separation due to Wake Turbulence.</p>
                            <p> </p>
                            <p>For the purposes of Wake Turbulence Separation aircraft are classified as Heavy, Large, or Small. For a detailed listing of aircraft weight classifications click <a href="http://www.skybrary.aero/index.php/Special:BrowseData/Aircraft?_single" target="_blank">here</a>.<br /></p>
                            <ul>
                            <li>Heavy aircraft are capable of takeoff weights of <strong>300,000</strong> pounds or more whether or not they are operating at this weight during a particular phase of flight. Some examples are most 707/C-135, all 747, 767, DC-10, L-1011, A-300, C-5, C-141, C-17, and B-52.</li>
                            <li>Large aircraft are aircraft of more than 41,000 pounds but less than 300,000 pounds maximum takeoff weight. Most military, Air Carrier, and other non-General Aviation aircraft are Large.</li>
                            <li>Small aircraft are aircraft of 41,000 pounds or less maximum takeoff weight. Most General Aviation aircraft are Small and most weigh 12,500 lbs or less.</li>
                            </ul>
                            
                            <p>IFR and VFR aircraft must be separated when departing from the same runway, or a parrallel runway separated by less than 2,500 feet.</p>
                            <ul>
                                <li><strong>ALL</strong> aircraft behind a <strong>Super A380</strong> - 3 minutes</li>
                                <li><strong>ALL</strong> aircraft behind a <strong>Heavy</strong> - 2 minutes</li>
                                <li><strong>SMALL</strong> aircraft behind a <strong>B757</strong> - 2 minutes</li>
                                <li><strong>SMALL</strong> aircraft behind a <strong>B757 low/missed approach</strong> - 3 minutes</li>
                            </ul>

                            <br />
                            <p>Issue wake turbulence cautionary advisories, e.g. <strong>CAUTION WAKE TURBULENCE"</strong> to:</p>
                            <ul>
                            <li>All aircraft behind a Heavy or B757.</li>
                            <li>Any aircraft if in your opinion wake turbulence may have an adverse effect on it.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">LUAW</a>
                        </h4>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Line up and Wait operations are used to expedite the flow of departing traffic. It means an aircraft can taxi onto the runway if they are next in line for departure, and you know you cannot issue a takeoff clearance.</p>
                            <p>Phraseology:</p>
                            <ul>
                                <li>RUNWAY (number) AT (taxiway designator), LINE UP AND WAIT.</li>
                            </ul>
                            <br />
                            <p>Below are some additional regulations in regards to LUAW Operations.</p>
                            <ul>
                                <li>Do not issue conditional instructions that are dependent upon the movement of an arrival aircraft on or approaching the runway or a departure aircraft established on a takeoff roll. Do not say, line up and wait behind landing traffic, or Taxi/proceed across Runway Three Six behind departing/landing Jetstar. The above requirements do not preclude issuing instructions to follow an aircraft observed to be operating on the movement area in accordance with an ATC clearance/instruction and in such a manner that the instructions to follow are not ambiguous.</li>
                                <li>When an aircraft is authorized to line up and wait, inform it of the closest traffic requesting a full-stop, touch-and-go, stop-and-go, option or unrestricted low approach to the same runway.</li>
                                <li>Do not instruct a small aircraft to line up and wait behind a heavy.</li>
                                <li>Do not issue a LUAW if you know you can issue a takeoff clearance</li>
                            </ul>
                            <br />
                            <p>An aircraft may be authorized to line up and wait at an intersection between sunset and sunrise. The procedure must be contained in a facility directive. The following conditions must apply:</p>
                            <ul>
                                <li>The runway must be used as a departure-only runway.</li>
                                <li>Only one aircraft at a time is permitted to line up and wait on the same runway.</li>
                            </ul>
                            <br />
                            <p>When aircraft are authorized to line up and wait on runways that intersect, traffic must be exchanged between that aircraft and the aircraft that is authorized to position and hold, depart, or arrive to the intersecting runway(s).</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
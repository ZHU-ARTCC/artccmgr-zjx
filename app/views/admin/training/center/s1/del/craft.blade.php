@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Introduction to CRAFT</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Introduction to CRAFT</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>When giving IFR Clearances, usage of the acronym CRAFT will help you remember the order to give the clearance and that you give the pilot all the necessary information. VFR aircraft at Class B and C airport will use the same format, without the C, and be given clearance into the Class B (no clearance into Class C is required).</p>
                            <ul>
                            <li><strong>C</strong> - Clearance Limit. The point they are cleared up to. Generally, this will be the destination airport unless it is a military aircraft with a point of VFR in their route (IE, a "VR" (VFR Training Route), or "VFR" where they will terminate VFR). <strong>Please always include the word "airport" in the clearance if the clearance limit is an airport.</strong></li>
                            <li><strong>R</strong> - Route. This will generally be their SID (Standard Instrument Departure), or Radar Vectors to their first point. If local procedures apply, you will say "<strong>as filed</strong>" in which the pilot is expected to fly as they filed unless any other restrictions are added. </li>
                            <li><strong>A</strong> - Altitude. The initial and cruise altitude are given here along with the time expected to be cleared to the cruise altitude. If the pilot as a SID, their time or distance to expect their cruise may be reflected in the SID, otherwise you will stick to local procedures. <strong>IMPORTANT NOTE: </strong>If the aircraft is departing a field with <strong>NO </strong>SID, the initial and requested cruise altitude are given in the clearance. If the aircraft is departing <strong>WITH</strong> a SID, "Climb Via Sid" Phraeseology is given instead. </li>
                            <li><strong>F</strong> - Frequency. This is the Radar Departure Frequency. It will be either Center or a Departure controller. If no radar controller is online, the departure frequency wlll be UNICOMM, 122.8</li>
                            <li><strong>T</strong> - Transponder. You will assign them a Squawk Code to put in their transponder.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Example 1</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Let's take this example. MTN7522 (Mountain Air Cargo) has this flight plan route CTY OCF LEESE2 from Tallahassee (KTLH) to Orlando International (KMCO) cruising at 7000 feet. Tallahassee is a class Charlie field with <strong>NO</strong> SIDS. His clearance would be:</p>
                            <p><em>Mountain 7522, Tallahassee Clearance, cleared to Orlando International Airport as filed. Maintain 3000, expect 7000, one zero minutes after departure. Departure frequency one three five point eight, Squawk 1561.</em></p>
                            <p>Using the above:</p>
                            <ul>
                            <li><strong>C</strong> is the "Cleared to Orlando International Airport".</li>
                            <li><strong>R</strong> is "as filed".</li>
                            <li><strong>A</strong> is "<em>Maintain 3000, expect 7000, one zero minutes after departure"</em> </li>
                            <li><strong>F</strong> is "<em>Departure frequency one three five point eight" </em></li>
                            <li><strong>T</strong> is  "Squawk 1561."</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Example 2</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Another example using 'Climb Via SID" phraseology.  This phraaseology will be used for <strong>ALL SIDS</strong> in the ZJX ARTCC. We have JBU678 on the ground at KJAX, requesting IFR to KJFX as filed. He has "CROSB2 WISPR SAV CHS J121 SIE CAMRN4" as his route, with a cruise of 39,000 feet.  His clearance would be:</p>
                            <p>"<em>Jetblue 678, cleared to the Kennedy Airport, CROSB2 Departure WISPR transition, then as filed.  Climb via SID. Departure frequency one two seven point zero, squawk 1566</em>"</p>
                            <p> </p>
                            <ul>
                            <li><strong>C</strong> "Cleared to the Kennedy Airport"</li>
                            <li><strong>R</strong> "CROSB2 Departure, WISPR transition, then as filed"</li>
                            <li><strong>A</strong> "Climb Via SID"</li>
                            <li><strong>F</strong> "Departure Frequency 127.0"</li>
                            <li><strong>T</strong> "Squawk 1566."</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Example 3</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>It is feasable that a new pilot may not understand SIDS and is not able to fly a SID. Let's use the previous aircraft, JBU678. We have JBU678 on the ground at KJAX, requesting IFR to KJFX as filed. He has "SAV CHS J121 SIE CAMRN4" as his route, with a cruise of 39,000 feet.  He is UNABLE to fly a SID. His clearance would be:</p>
                            <p> "<em>Jetblue 678, cleared to the Kennedy Airport, via fly runway heading radar vectors Savannah, then as filed.  Maintain 3000, expect flight level three niner zero, one zero minutes after departure, departure frequency one two seven point zero, squawk 1566</em>"</p>
                            <ul>
                            <li><strong>C</strong> "Cleared to the Kennedy Airport"</li>
                            <li><strong>R</strong> "via fly runway heading radar vectors Savannah, then as filed"</li>
                            <li><strong>A</strong> "Maintain 3000, expect flight level three niner zero, one zero minutes after departure"</li>
                            <li><strong>F</strong> "Departure Frequency 127.0"</li>
                            <li><strong>T</strong> "Squawk 1566."</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Example 4 (VFR)</a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>VFR clearance is less complicated than IFR clearance and may vary slightly depending on the class of airport departing <strong>AND</strong> local procedures. Its uses the RAFT or AFT portion of CRAFT depending on the airspace. </p>
                            <p>Let's consider N517CC , Beech King Air who would like VFR clearance from the <strong>Bravo</strong> field KMCO to KTLH requesting 16500 feet and a route of OCF CTY SZW. Keep in mind that the filed routing and altitude is of <strong>NO</strong> consequence when giving VFR clearance at <strong>any</strong> field. </p>
                            <p>"<em>N517CC, cleared out of the Orlando Class Bravo Airspace. Maintain VFR at or below 1500, Departure Frequency one two four point eight, squawk 1553</em>"</p>
                            <ul>
                            <li><strong>R</strong> "Out of the Orlando Class Bravo".</li>
                            <li><strong>A</strong> "Maintain VFR at or below 1,500"  (Local Procedure)</li>
                            <li><strong>F</strong> "Departure Frequency 124.8"</li>
                            <li><strong>T</strong> "Squawk 1553"</li>
                            </ul>
                            <p> </p>
                            <p>Let us now consider the same clearance out of a <strong>Charlie</strong> field KJAX to KTLH requesting 16500 feet and a route of TAY SZW. Aircaft do <strong>NOT</strong> need a <strong>class</strong> clearance out of a Charlie field.</p>
                            <p>"<em>N517CC, Maintain VFR at or below 3000, Departure Frequency one two seven point zero, squawk 1553</em>"</p>
                            <ul>
                            <li><strong>A</strong> "Maintain VFR at or below 3000"  (Local Procedure)</li>
                            <li><strong>F</strong> "Departure Frequency 127.0"</li>
                            <li><strong>T</strong> "Squawk 1553"</li>
                            </ul>
                            <p> </p>
                            <p><strong>NO CLEARANCE DELIVERY IS REQUIRED FOR VFR AIRCRAFT DEPARTING A CLASS DELTA FIELD. </strong> Aircraft will simply get taxi instructions and weather information. </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
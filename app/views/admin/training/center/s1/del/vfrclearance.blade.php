@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Introduction to VFR Clearance Delivery</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Introduction to VFR Clearances</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>The only time a VFR aircraft will utilize Clearance Delivery is when they want Flight Following, or are at a Class B or C airport. VFR aircraft are not required to file a flight plan.</p>
                            <p>Flight Following is a service offered for VFR aircraft by the radar controller to provide radar services for traffic advisories and other important advisories such as pointing out active special use airspace, etc. This service is issued based on controller workload only and is not mandatory. That being said, if a VFR aircraft requests flight following from a class delta field, please contact the appropriate departure controller to confirm that they are able to accept flight following for that aircraft before clearance is issued. In a class charlie or bravo field, they will need to talk to the departure controller in any case and the departure controller can make the decision at the time. </p>
                            <p>If flight following is requested or approved, place "VFF" or "FF" in the scratchpad entry. </p>
                            <p><strong>If a VFR aircraft is departing a Class D field and is NOT requesting flight following, NO delivery is required and the pilot will call ground for taxi. </strong></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">RAFT</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Remember RAFT? Issuing VFR clearances is easy. You are only clearing them VFR at a certain altitude (<strong>applicable only in Class B and C airspace</strong>), a departure frequency, and a beacon code for their transponder. For Class B airports, you must clear them into the Bravo airspace. If it's slow, coordinate with the departure radar controller to see whether or not they wish to leave VFR aircraft capped at or below a certain altitude before issuing VFR clearances. Let's get a VFR flight going.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Class B</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p><em>N462DH: Orlando Clearance, N462DH, looking for VFR to the south, ready to copy.<br /><br />MCO_DEL: N462DH, Orlando Clearance, cleared into the Orlando Class Bravo Airspace. Maintain VFR at or below 1,500. Departure frequency 124.8. Squawk 1502.<br /><br /> N462DH: Alright. Cleared into the Orlando Class Bravo at or below 1,500. 124.8, and squawk 1502, N462DH.<br /><br />MCO_DEL: Readback correct, engine start at your discretion. Contact ground 121.8 when ready to taxi. Orlando ATIS Bravo is current. </em></p>
                            <p>Pretty easy right?</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Class C/D</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Okay, so you know how to read a Class B clearance. How about one outside of Class B? It's the same, minus the clearance into the Bravo airspace. Class C airports can issue altitude restrictions for within the Class C airspace. Class D airports cannot issue any altitude restrictions.</p>
                            <p><strong>Class C:</strong></p>
                            <p><em>N505ES: Jacksonville Delivery, N505ES, looking VFR to the south. Request flight following.<br /><br />JAX_DEL: N505ES, maintain VFR at or below 3,000, departure frequency 127.0. Squawk 2655.<br /><br />N505ES: Maintain VFR 3000. 118.75 and 2655.<br /><br />JAX_DEL: Readback correct. Contact ground 121.9 when ready to taxi.</em></p>
                            <p>Simple... no?</p>
                            <p>Class D:</p>
                            <p><em>N517CC: Orlando Executive Delivery, N717CC requesting VFR to the north with flight following. </em></p>
                            <p><em>ORL_DEL: N517CC, clearance on request. <strong>(remember to request FF from the departure controller)</strong></em></p>
                            <p><em>ORL_DEL: Orlando Approach, Orlando Delivery.</em></p>
                            <p><em>MCO_E_APP: Orlando Approach, go ahead.</em></p>
                            <p><em>ORL_DEL: N517CC, type Kingair, request flight following to the north.</em></p>
                            <p><em>MCO_E_APP: N517CC flight following approved. HS</em></p>
                            <p><em>ORL_DEL: Flight following approved. CO</em></p>
                            <p><em>ORL_DEL: N5177CC, clearance available.</em></p>
                            <p><em>N517CC: Ready, 7CC</em></p>
                            <p><em>ORL_DEL: N517CC, maintain VFR. Departure frequency 124.8, squawk 1077.</em></p>
                            <p><em>N517CC: VFR, 124.8, squawk 1077.</em></p>
                            <p><em>ORL_DEL: N517CC, readback correct. Remain outside the class B airspace. Ground is on 121.4</em></p>
                            <p><em>N517CC: Roger</em></p>                        
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Conclusion</a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>You are now done with your introduction to clearance delivery materials. At this point you are ready to begin a check with the instructors and begin live network training on delivery.</p>
                            <p>&nbsp;</p>
                            <p><strong>Remember these main points:</strong></p>
                            <ul>
                            <li><strong>Cleared into the Orlando Class Bravo (If departing Orlando INTL)</strong></li>
                            <li><strong>Maintain VFR (Initial Altitude if applicable)</strong></li>
                            <li><strong>Departure Frequency XXX.X</strong></li>
                            <li><strong>Squawk XXXX</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
</section>


@stop
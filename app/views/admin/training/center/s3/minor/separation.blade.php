@extends('admin.training.center.layouts.master')


@section('content')

    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Radar Separation</h2>
        </header>

        <div class="row">
            <div class="col-sm-12">

                <section class="panel">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Radar Separation (Lateral)</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                Lateral separation

                                Simplified for VATSIM use, these are the separation requirements without taking into account wake turbulence or visual separation:
<ul>
    <b>Class B airspace</b>

    <ul>

                               <li>IFR-IFR: 3 miles, 1000ft
                                <li>IFR/VFR-VFR and either aircraft is >19000 lbs or a jet: 1.5 miles, 500ft
                                <li>IFR/VFR-VFR <19000 lbs: target resolution, 500ft
</ul>
                               <b>Class C airspace</b>
<ul>
                                <li>IFR-IFR: 3 miles, 1000ft
                               <li> IFR/VFR-VFR a: target resolution, 500ft
                                <li>VFR-VFR: sequencing, traffic advisories and safety alerts
</ul>
                                <b>Class D airspace</b>
<ul>
                                <li>IFR-IFR: 3 miles, 1000ft
                                <li>IFR/VFR-VFR: sequencing, traffic advisories and safety alerts
</ul>
                                <b>Class E airspace</b>
<ul>
                                <li>IFR-IFR: 3 miles, 1000ft
                                <li>IFR/VFR-VFR: traffic advisories and safety alerts
</ul>

                              <b>Target resolution procedures mean that the targets may not touch and that a mandatory traffic advisory must be issued.</b>

                            </div>
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Wake Turbulence Separation</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <b>Some aircraft require specific lateral separation depending on their wake turbulence category. Information regarding weight and wake turbulence category can be found in Appendix A of the FAAO 7110.65(external link)</b>

                                <b>Separate aircraft operating directly behind, or directly behind and less than 1,000 feet below, or following an aircraft conducting an instrument
                                approach by</b>
<ul>
                                <li style="color:lightskyblue;">Heavy behind heavy- 4 miles.

                                <li style="color:lightskyblue;">Large/heavy behind B757- 4 miles.

                                <li style="color:lightskyblue;">Small behind B757- 5 miles.

                                <li style="color:lightskyblue;">Small/large behind heavy - 5 miles
        </ul>

                                <b>In addition to that, you must separate an aircraft from another aircraft landing on the same runway by ensuring that the following separation minima exists at the time the preceding aircraft crosses the runway threshold</b>
<ul>
                                <li style="color:mediumpurple;">Small behind large- 4 miles.

                                <li style="color:mediumpurple;">Small behind B757- 5 miles.

                                <li style="color:mediumpurple;">Small behind heavy- 6 miles.
</ul>
                                <b>Final approach course separation</b>
<ul>
                                You may use the minimum separation of 2.5 miles between aircraft established on the final approach course and within 10 miles from the landing runway provided that:
                                <li>Both aircraft are of the same weight category
                                <li> Heavy aircraft or B757 participate as the trailing aircraft only
                                <li> The tower has a certified tower radar display
</ul>
                                "{Reference: FAAO 7110.65 5-5-2 to 5-5-4}"

                            </div>
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Radar Separation (Vertical)</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="panel-body">
                                    You may separate aircraft vertically provided they both have valid Mode-C readouts. In order to separate vertically, you may assign altitudes to comply with the above separation requirements. However, vertical separation may only be used when the aircraft is level, in other words, if you may only issue a descent to an altitude when the previous aircraft at that altitude has started a descent.
                                    Methods to vertically separate targets:
                                    <li style="color:lightskyblue;"> Assign altitudes to aircraft, provided valid Mode C altitude information is monitored and the applicable separation minima is maintained at all times.
                                    <li style="color:lightskyblue;">Assign an altitude to an aircraft after the aircraft previously at that altitude has been issued a climb/descent clearance and is observed, or reports, leaving the altitude.
                                    <li style="color:red;">Minimum Radar Separation Vertically is 1000ft.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </section>


@stop
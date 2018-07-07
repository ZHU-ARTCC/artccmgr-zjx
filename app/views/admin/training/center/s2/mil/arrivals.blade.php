@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Military Arrivals</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Check Wheels Down</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Remind aircraft to check wheels down on each approach unless the pilot has previously reported wheels down for that approach.<br /><br /> <strong>PHRASEOLOGY-</strong><br /><br /> <em>Check wheels down.</em></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">High Key/Low Key/Flame Out</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6"><img src="/assets/images/milapp.jpg" width="100%" /></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <p>Simulated Flame Out (High Key) approaches may be authorized so long as the aircraft will be in contact and visible to local controllers prior to commencing the approach and you get the maneuvering altitudes of the aircraft concerned are obtained prior to approving teh approach.<br /><br /> Aircraft may commence a simulated flame out at Low Key by specifically requesting low key.<br /><br /> Aircraft should be switched to the Local Controller prior to the initial and commencing the approach. Local controllers should be instructed to report high or low key as appropriate.<br /><br /> <strong>PHRASEOLOGY-</strong><br /><br /><em>REPORT (high or low) KEY (as appropriate).<br /><br /> Request a report at low key when traffic conditions warrant and additional report position. At low key, issue the low approach clearance or alternate instructions.</em></</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Overhead Breaks</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6"><img src="/assets/images/ovhdbreak.gif" width="100%" /></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <p>Aircraft will be switched to the local controller prior to reaching the initial. To complete an overhead break, IFR aircraft shall have cancelled IFR so visual separation may be applied.<br /><br /> When an aircraft checks in for the overhead break, specify the pattern altitude unless you know the pilot knows the standard procedure.<br /><br /> <strong>PHRASEOLOGY-</strong><br /><br /> <em>PATTERN ALTITUDE (altitude). (Right/Left) TURNS. <br /><br /> Specify the break point if pilot breaking at that point is required for traffic conditions. Otherwise, you may use the alternate break approved phraseology. You may also ask the pilot to report break as a reminder.<br /><br /> <strong>PHRASEOLOGY-</strong> <br /><br /> <em>Break at (specified point).</em><br /> <em>At (point), break approved.</em><br /><br /> <em>Report break.</em><br /><br /> Once the aircraft has broken, it will enter the downwind leg of the pattern and complete the approach as a normal circuit.<br /><br /> <u>Example:</u><br /><br /> <em>KATT616: Sherman Tower, Katt 616, initial for runway 7L.<br /> Sherman Tower: Katt 616, Sherman Tower, report the numbers runway 7L. Pattern altitude 800. Left turns.<br /> KATT616: Katt 616.<br /> KATT616: Sherman Tower, Katt 616, numbers 7L.<br /> Sherman Tower: Katt 616, At midfield, break approved.<br /> KATT616: Break approved midfield, Katt 616.<br /> (KATT616 flies to midfield and breaks)<br /> Sherman Tower: Katt 616, traffic on a 4 mile final for 7L is a T6 following you, check wheels down, runway 7L, wind 090 at 10. Cleared to land.<br /> KATT616: Traffic in sight, 3 down and locked, cleared to land runway 7L, Katt 616.</em></em></</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Wind Issuance</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Wind must always be issued when clearing an aircraft to land, touch and go, stop and go, low approach, or the option.<br /><br /> <strong>PHRASEOLOGY-</strong><br /><br /> <em>Runway (number), Wind (surface wind direction and velocity), cleared to land.</em></p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
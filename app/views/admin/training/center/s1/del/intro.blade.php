@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Introduction to Clearance Delivery</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">The Position</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Clearance Delivery Coordinators are essentially controllers that relay IFR and VFR clearances from the radar departure controller to the pilot. They deliver necessary information including, but not limited to, Clearance Limits, Initial Altitudes, Climb out instructions, when to expect Cruise altitude, departure frequency and squawk. This sounds like a lot, but we'll get you through it.</p>
                            <p>Example of a Clearance issuance from Danbury (KDXR) to LaGuardia (KLGA). The entire flight is there is you are interested. Guido's videos are always informative and impressive. </p>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-_Swq9M4Hwk"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">SID - Standard Instrument Departures</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>To assist in streamlining traffic flowing out of an airport and assist in separation between departing and arriving traffic, busy airports use Standard Instrument Departures. There are three kinds: </p>
                            <ul>
                                <li><strong>Pilot Nav</strong> - In these SIDs, it provides a path from the departure point to the exit (transition) point.</li>
                                <li><strong>Radar Vector</strong> - Radar Vectored departures require the pilot to receive an assigned heading and must maintain that heading until they receive radar vectors to the filed exit or transition point.</li>
                                <li><strong>Hybrid</strong> - There are two types of Hybrid SIDs, but they essentially combine Radar Vectored departures with Pilot Navigation departures. One Hybrid departure gives a pilot instructions to fly after departure until they receive radar vectors to their exit (transition) point. Another type of Hybrid Departure requires radar vectors to join it then gives the pilot a path to fly through to their transition point.</li>
                            </ul>
                            <p>Don't worry, we'll dive further into these in the following sections.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Pilot Nav SIDs</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p><strong>Pilot Nav</strong>SIDs are the easiest for controllers. They provide step by step instructions to the pilot from the point of departure all the way to the transition point. These exit points are referred to as "<strong>transitions</strong>".<br /><br />In the chart below, known as a Departure Chart, we see the MLTRE1 (MOULTRIE ONE) departure from Charleston AFB/International. The path that a pilot will fly is shown in a bold line from the edge of the runway, either to ANGRE then MLTRE or straight to MLTRE depending on the departing runway.<br /><br />This chart provides to the pilot their route to fly and the initial top altitude of 4000 feet.</p>
                            <p>Notice that the departure has two transitions :</p>
                            <p style="padding-left: 30px; text-align: left;">JYMSE and the Vance (VAN) VOR</p>
                            <p>United 123 has filed a plan to Chicago Ohare via the following route: MLTRE1 VAN CAE FLM HEVAN MZZ VEECK1</p>
                            <p style="padding-left: 30px;">An example of the phraseology for the MLTRE1 (Moultrie) Departure: <em>"United 123, Charleston Clearance, Cleared to the Ohare Airport, Moultrie One Departure, Vance Transition then as filed. Climb Via SID. Departure Frequency 120.7. Squawk 1646."</em></p>
                            <p><img src="http://www.healthcentraled.com/images/MLTRE2dp.png" alt="" width="50%" /></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Radar Vectored SIDs</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p><strong>Radar Vector</strong> SIDs, like the one shown below, is one that gives minimal information to the pilot. The pilot is to fly with instructions from the Tower controller and stick to those instructions until they get vectors to their first waypoint. These will be read to pilots as <strong>"Jacksonville 6 Departure, then as filed"</strong>. The word <strong>TRANSITION</strong> is <strong>NOT</strong> used with a Radar Vector SID phraseology.<br /><br />In this type of SID, the pilot is generally assigned a specific heading (Based on Local Procedures) or runway heading and will maintain that heading until they receive radar vectors to the filed transition. Only NAVAIDs listed on this chart are acceptable for transition points on this departure. Notice the lack of the bold line as was present in the Pilot Navigation SID. This means that the pilot must receive radar vectors as there is no path for the pilot to fly. The top altitude is supplied at 3000.</p>
                            <p>United 123 filed the following route: JAX6 SAV CHS J79 JFK ORW6<br /><br />An example of the phraseology for the Jacksonville 6 Departure: <em>"United 123, Jacksonville Clearance, Cleared to the Boston Logan Intl Airport , Jacksonville 6 Departure, then as filed. Climb Via SID. Departure Frequency 127.0. Squawk 1646."</em></p>
                            <p><img src="http://www.healthcentraled.com/images/image.jpg" alt="" width="50%" /></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Hybrid SIDs</a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p><strong>Hybrid</strong> SIDs are a combination of Pilot Navigation departures and Radar Vector departures. Here are 2 examples from our ARTCC. </p>
                            <p><strong>Jaguar Four Departure (JAG4) </strong>Orlando International</p>
                            <p>This non-RNAV departure utilizes radar vectors initially off the field usually to GUANO then the pilot will fly the remainder of the procedure as published. Note the three <strong>TRANSITIONS:</strong> Colliers VOR (IRQ), Dublin VOR (DBN), and the Alma VOR (AMG). One of these will be in the routing and read in the delivery. Please note that the other VORs are <strong>NOT</strong> transitions and used as navigational aids. Page 2 of the procedure reveals the top altitude of 5000 feet. </p>
                            <p>Let's look an example for Southwest 8604 going to Atlanta with the following routing: JAG4 DBN ONYON1.</p>
                            <p>Here is an example delivery phraseolgy: "<em>Southwest 8604, Orlando Delivery, Cleared to the Atlanta Hartsfield Intl Airport, Jaguar 4 Departure, Dublin <strong>transition</strong>, then as filed. Climb via SID. Departure frequency 124.8, Squawk 3756."</em></p>
                            <div class="row">
                                <div class="col-sm-6"><img src="http://www.healthcentraled.com/images/JAG4.png" alt="" width="100%" /></div>
                                <div class="col-sm-6"><img src="http://www.healthcentraled.com/images/JAG4cont.png" alt="" width="100%" /></div>
                            </div>
                            <br />
                            <p><strong>ARNEY TWO Departure (ARNEY2) RNAV</strong> Jacksonville International</p>
                            <p>This RNAV departure utilizes radar vectors initially off the field to KIMML then the pilot will fly the remainder of the procedure as published. Note the two <strong>TRANSITIONS:</strong> BAXLY and the Alma VOR (AMG). One of these will be in the routing and read in the delivery. The top altitude is published at 3000 feet.</p>
                            <p>Let's look an example for Southwest 8604 going to Atlanta with the following routing: ARNEY2 BAXLY DBN ONYON1.</p>
                            <p>Here is an example delivery phraseolgy: "<em>Southwest 8604, Jacksonville Delivery, Cleared to the Atlanta Hartsfield Intl Airport, ARNEY2 Departure, BAXLY <strong>transition</strong>, then as filed. Climb via SID. Departure frequency 127.0, Squawk 3756."</em></p>
                            <p> <img src="http://www.healthcentraled.com/images/ARNEY2dp.png" alt="" width="50%" /></p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
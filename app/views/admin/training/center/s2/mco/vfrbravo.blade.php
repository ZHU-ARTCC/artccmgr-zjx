@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>VFR Transitions</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Airspace Requirements</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>We'll say that N12345 is calling up Orlando Tower for clearance into the Orlando Class B airspace.</p>
                            <p>What are the requirements for entering Class B airspace? You'll need:</p>
                            <ul>
                            <li>An operating mode-C (altitude reporting) transponder</li>
                            <li>Two-way radio communication</li>
                            <li>An explicit clearance into the airspace<br /><br /></li>
                            </ul>
                            <p>The requirements differ for Class C airspace:</p>
                            <ul>
                            <li>Two-way radio communication</li>
                            <li>An operating mode-C transponder</li>
                            </ul>
                            <br />
                            <p>Class D airspace is also different:</p>
                            <ul>
                            <li>Two-way radio communication</li>
                            </ul>
                            <br />
                            <p>It is <strong>critical</strong> to note that two-way communication is defined as the controller stating the aircraft callsign in the transmission. If the controller states, <em>"Aircraft calling, standby."</em>, this does not constitute two-way communication.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">How to handle class B transitions</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>N12345 has called up Orlando Tower for clearance into the Class B airspace, and he is mode-C equipped. The easiest way for a local controller to radar identify a target is to have the target "ident". "Identing" sends a unique signal to the radar interrogator that appears as a set of dashed lines over the radar return, or a flashing datablock, depending on the radar mode.<br /><br /> N12345 will also need a squawk code to enter the airspace. To assign a squawk code in VRC, you will need to hit . If you are using flight strips, it will appear in box three of the strip (the box on top of the three boxes on the right side). If you are looking at the arrival/departure list, it will appear on the first line, farthest to the right.<br /><br /><strong>P</strong>: <em>Orlando Tower, N12345, Cessna 172, 9 miles to the east of Orlando, VFR at 1,500 requesting class bravo transition.</em><br /><br /> <em><strong>A</strong>: N12345, Orlando Tower, squawk 5620 and ident. Say altitude (if required).</em><br /><br /> Now, let's break down what we just said.</p>
                            <ul>
                            <li>N12345 - the aircraft callsign</li>
                            <li>Orlando Tower - your position</li>
                            <li>squawk 5620 - the unique squawk code assigned to that aircraft</li>
                            <li>ident - provides a sure-fire way of radar identification</li>
                            <li>Say altitude (if needed) - this verifies that the mode-C transponder is working correctly</li>
                            </ul>
                            <br />
                            <p><strong>P</strong>:<em> N12345, squawk 5-6-2-0 and ident, 3,500 feet.</em></p>
                            <p><em><strong>A</strong>: N12345 radar contact 8 miles east of the Orlando Airport, cleared through the Orlando Class Bravo airspace, maintain 1,000, Orlando altimiter 30.04, report clear of the class Bravo. </em></p>
                            <p><strong>P</strong>: <em>N12345 cleared through the Orlando class bravo at 1000 on 30.04, we'll report clear.</em></p>
                            <p>[pilot clears he airspace and reports clear]</p>
                            <p><strong>P</strong>: <em>N12345 8 miles to the north west we are clear of the bravo.</em></p>
                            <p><strong>A</strong><em>: N12345, <strong>radar services terminated</strong>, remain clear of the Orlando class bravo, <strong>squawk and maintain VFR</strong>, frequency change is approved.</em></p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
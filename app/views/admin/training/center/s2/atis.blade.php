@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>The ATIS</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Introduction to ATIS</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Please listen to the real world Orlando International ATIS.</p>
                            <p><a href="http://www.liveatc.net/flisten.php?mount=kmco7&icao=kmco" target="_blank">KMCO Live ATIS</a></p>
                            <p> </p>
                            <p>ATIS, or Automatic Terminal Information Service, is a system used by controlled airports to broadcast current weather information, airfield status, and any other pertinent information.</p>
                            <p>After learning how to create your own voice ATIS in your training session, you will also learn to use vATIS and create a virtual version of the above real world ATIS.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">What is an ATIS</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>ATIS broadcasts guidelines and formats are defined under Section 2-9 of the 7110.65.</p>
                            <p>ATIS broadcasts are defined by a unique identification letter read phonetically to identify the age of the information.</p>
                            <p>Example: ATIS Inforamation A (Alpha)</p>
                            <p>A new ATIS is required, including incrementing the letter when any of the following apply:<p>
                            <ul>
                            <li>Upon receipt of any new official weather (METAR) regardless of whether there is a change of values</li>
                            <li>When runway braking action reports are received that indicate runway braking is worse than that which is included in the current ATIS broadcast</li>
                            <li>When there is a change in any other pertinent data, such as runway change, instrument approach in use, new or canceled NOTAMs/PIREPs/HIWAS update, etc.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">What is in the ATIS</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>ATIS Content is defined by Paragraph 2-9-3 of the 7110.65.</p>
                            <p>ATIS broadcasts will contain, as appropriate:</p>
                            <ul>
                            <li>Airport/facility name, phonetic letter code, time of weather sequence in UTC. Weather information consisting of wind direction and velocity, visibility, obstructions to vision, present weather, sky condition, temperature, dew point, altimeter, a density altitude advisory when appropriate and other pertinent remarks included in the official weather observation.</li>
                            <li>Instrument/Visual approaches in use. Example, "VOR/DME Approach in use runway 5L, ILS approach in use runway 5R"</li>
                            <li>Departing runways(to be given only if different from landing runway(s) or in the instance of a "departure only" ATIS)</li>
                            <li>Any closures that impact airport operations</li>
                            <li>Runway braking action.</li>
                            <li>Other optional information as local conditions dictate. This may include such items as VFR arrival frequencies, temporary airport conditions, LAHSO (Land and Hold short operations), or other items that may appear for a matter of hours or a few days on the ATIS.</li>
                            <li>Low level wind shear/microburst when reported by pilots.</li>
                            <li>Instructions for the pilot to acknowledge receipt of the ATIS message by informing the controller on initial contact.</li>
                            </ul>
                            <p><strong><em>EXAMPLE-</em></strong><br />Jacksonville International Airport Information Charlie,  zero six fife three zulu. Wind zero two zero at one zero gust one six. Visibility six in light rain. Sky condiions, few one thousand two hundred, ceiling two thousand two hundred overcast. Temperature two seven, dew point two three, altimeter two niner niner niner. ILS runway eight in use. Landing and departing runway eight. VFR traffic say direction of flight. Read back all runway hold short instructions. Advise controller on initial contact you have information Charlie. </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
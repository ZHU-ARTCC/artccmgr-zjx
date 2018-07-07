@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Introduction to Routing</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Introduction to Routing</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Routing is an important step in a flight plan. It is saying the path the aircraft is going to take from its departure airport to destination. As a clearance delivery coordinator, it is your responsibility for ensuring the route makes sense. If a pilot does not file a SID, it is recommended that you find a SID that makes sense with the direction of flight, and recommend the modified route to the pilot. If unable, issue the standard radar vector or hybrid radar vector SID to the pilot with radar vectors to either their first fix, or a point between the airport and their first fix. This will help ensure a smooth flow of traffic into and out of the departure airport.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Choosing a SID</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Since you learned how to read SIDs in the Introduction to Clearance Delivery chapter, I'm not going to cover that here.<br /><br /> Let's say, for example, that Southwest 235 filed IFR from KJAX to KATL. Their route is:AMG SINCA6. Pop open your handy chart resource, such as <a href="http://www.airnav.com">http://www.airnav.com</a> and look through the Departure plates. The first point is the AMG (Alma) VOR, see if that fix exists as the name of a SID. If not, you will need to analyze each SID to look for AMG. SIDs often are directional. You are looking for a northboud SID. SAWGY2 and EXBOX2 are southbound.  Keep looking! Now you have found 2 SIDs with AMG in the published procedure. The ARNEY2 and Jacksonville Six Departures. Take a look at each plates below.</p>
                            <div class="row">
                                <div class="col-sm-6"><img src="http://healthcentraled.com/images/JAX6.png" alt="" width="100%" /></div>
                                <div class="col-sm-6"><img src="http://healthcentraled.com/images/ARNEY2dp.png" alt="" width="100%" /></div>
                            </div>
                            <p>Notice AMG in each SID. Now we must notice that the JAX6 is a radar vector departure and can be flown by any airctaft regarless of navigational equipment. The ARNEY2 SID on the other hand is an RNAV procedure and the aircraft must be RNAV capable. If you can verify the aircraft is RNAV capable, you may assign the ARNEY2, otherwise you may assign the JAX6 SID.  Reading revised routes will be covered later.</p>
                            <p>If a pilot says they are not able to take a departure, utilize "Cleared to __airport__ via fly runway heading, radar vectors to __first fix__, then as filed" or "cleared to __airport__ as filed". Tower can still change their departure heading, and this way the aircraft should not make any turns until turned by departure. Make sure the first fix is an appropriate gate defined by the SOP or has been approved by departure. </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Cruise Altitudes</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>There are literally thousands of aircraft in the sky at any time of day. Not only are routes used to keep them separated, but to help keep traffic separated between two airports, they are also kept separated by Altitudes based on direction of flight. For this rule we have a shortcut called <strong>NEODD SWEVEN</strong> (pronounced knee-odd and sweven). This means basically North and East get Odd altitudes, South and West get Even altitudes.<br /><br /> To be more specific, if the direction of flight is north (360 degrees) to a heading of 179 degrees, the aircraft shall fly at an odd cruise altitude. If the direction of flight is south (180 degrees) to 359 degrees, the aircraft shall cruise at an even altitude. For aircraft that alternate between northeast and northwest legs, they will receive descent and climb instructions along their route to keep them with an appropriate cruise altitude.<br /><br /> As a clearance delivery coordinator, it is your responsibility to look at the first leg of the route to ensure the cruise altitude matches with the direction of flight.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Cruise Altitude Examples</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Let's take an example here. United 157 is flying from IAD to BOS. This involves a Northeast direction of flight. They filed for FL320. When they call for clearance, you check their route to see them flying northeast. Since their altitude does not match their direction of flight, inform them of such and ask what altitude they would like. Usually you could recommend one up or one down, in this case FL310 or FL330.<br /><br /> Remember, <strong>above FL410</strong> the NEODD and SWEVEN rule do not apply and 2000 feet separation is required. SWEVEN is every 4000 feet beginning with FL430, and NEODD is every 4000 feet beginning with FL450. See the <a href="http://www.zjxartcc.com/dl.php?id=43">Cheat Sheet</a> for help.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Positions and Facilities</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Air Traffic Control Positions and Facilities</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>There are several different aviation facilities, however, we are going to concentrate on those that are replicated on VATSIM.</p>
                            <p>There are three types that are replicated:<br /></p>
                            <ul>
                            <li>Terminal - These facilities deal with immediate arrival and departure traffic as well as individual airport movements. Towers and TRACONs are part of Terminal.</li>
                            <li>En-route - These are "Centers" that are responsible for the final portions of departure climbs, getting traffic to their route, and the initial portions of approach. En-route may also work terminal services in areas where no approach radar is available.</li>
                            <li>Oceanic Radio - These are called "Flight Service Stations" on VATSIM, and are responsible for oceanic operations in VATSIM over the Pacific, Atlantic and Indian Oceans.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">ATCT - Clearance Delivery</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>The first position we are going to go over is Clearance Delivery. This is not a control position, but a coordination/relay position. They relay a departure clearance (Flight Plan) from the departure radar controller to the pilot and provide the latest weather information. They do not have any control of aircraft movement on the ground.</p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">ATCT - Ground</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>The Ground Controller is responsible for all movements on the ground from the edge of the ramp to the runways. In cases of parallel runways, in most instances, ground is not responsible for the taxiways immediately between parallel runways unless there is a ramp between. The ground controller is also responsible for the inactive runway. In the airport diagram of KMCO below,  the Ground Controller AOR (Area of Responsibility) is shaded in red. The green shaded taxiways are controlled by local control between the parallel runways.<br /></p>
                            <p><img src="/assets/trainingcenter/images/KMCOGrounddiagram.png" width="100%" /></p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">ATCT - Local Control</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>The Local controller is the controller responsible for arriving and departing aircraft, aircraft in the immediate tower area in the air, and sometimes taxiways between parallel runways where no ramps exist between. The 2 Figures below shows Pensacola Regional's Local Controllers Area of Responsibility (AOR) both on the ground and in the air. Tower only controls 4 NM around the airfield in this case, from the surface to 3,000 feet MSL.</p>
                            <p><img src="/assets/trainingcenter/images/KPNSdiagram.png" width="100%" /></p>
                            <p><img src="/assets/trainingcenter/images/PNStwrairspace.png" width="100%" /></p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Terminal - TRACON</a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>The next step is the the TRACON. TRACON, or Terminal Radar Approach Control, are the controllers that takes over responsibility of aircraft from Tower and gets them out of their airspace and around arriving aircraft before they go off to the en-route controller.<br />There are different types of Approach and Departure Radar facilities based upon what agency runs it. In the US, these include:</p>
                            <ul>
                                <li>ARAC - Army Radar Approach Control, US Army</li>
                                <li>RAPCON - Radar Approach Control, US Air Force</li>
                                <li>RATCF - Radar Approach Terminal Control Facility, US Navy and US Marine Corps</li>
                                <li>TRACON - Terminal Radar Approach Control, FAA</li>
                            </ul>
                            <p>TRACONs are responsible for a larger amount of airspace than a tower because they are responsible for vectoring aircraft down to more than one airport in most instances. Following our previous example, Pensacola TRACON provides services in a block of airspace as indicated below from Surface to Flight Level 230.</p>
                            <p><img src="/assets/trainingcenter/images/PNStracon.png" width="100%" /></p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Enroute</a>
                        </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>En-Route are "centers" that cover large amounts of airspace and provide final vectors to departure paths and arrivals into TRACONs or to airports not serviced by a TRACON. The US has 20 "Centers" that cover the continental United States, called Air Route Traffic Control Centers (or ARTCCs).</p>
                            <p>Jacksonville Center (ZJX) borders Houston (ZHU), Atlanta (ZTL), Washington (ZDC), Miami (ZMA), as well as New York Radio and Houston Radio airspace.</p>
                            <p><img src="/assets/trainingcenter/images/KJAXneighborhood.png" width="100%" /></p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Enroute - Regions</a>
                        </h4>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>To help break down procedures and coordinate things between different controllers in the ARTCC, ARTCCs are broken down into Regions. Below is Jacksonville's Western Region, Ashburn.<br /><br /></p>
                            <p><img src="/assets/trainingcenter/images/ZJX_West_Region.png" width="100%" /></p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Enroute - Sectors</a>
                        </h4>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Centers are broken up into sectors to alleviate work loads between multiple people. TRACONs can be broken up by sectors as well. Center sectors fall under jurisdiction of a ARTCC Region and are generally serviced by 1 controller. This controller is responsible for all airspace not controlled by a TRACON and another center sector. In most cases, there are multiple levels of sectors. Jacksonville, for example, has a "Low" sector which covers all uncontrolled airspace from the Surface to Flight Level 230, a "High" from Flight Level 230 to Flight Level 350, and an "Ultrahigh" from Flight Level 350 to Flight Level 600. The higher the sector, generally the larger amount of airspace covered as traffic will usually be on their filed flight plan and not require as much vectoring and attention as when they are lower.</p>
                            <p>Below is Jacksonville's Metta Low Sector:</p>    
                            <p><img src="/assets/trainingcenter/images/ZJX_Low_Sector.png" width="100%" /></p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>

@stop
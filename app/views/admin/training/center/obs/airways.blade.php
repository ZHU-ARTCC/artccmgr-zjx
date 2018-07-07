@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Airways</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Airways</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>In the sky there are highways that connect points together called "airways". There are three types:</p>
                            <ul>
                                <li>VOR and L/MF (VOR) Airway System</li>
                                <li>The Jet Route System</li>
                                <li>Area Navigation (RNAV) Routes</li>
                                <li>Military Training Routes (MTR)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">VOR and L/MF Airways</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>VOR and L/MF airways consists of airways designated from 1,200 feet above the surface up to but not including 18,000 feet MSL.</p>
                            <ol>
                            <li>Except in Alaska and coastal North Carolina, VOR airways are predicated solely on VOR or VORTAC navigation aids; depicted on aeronautical charts; and identified by a "V" (Victor) followed by the airway number.</li>
                            <ol>
                            <li>A segment of an airway which is common to two or more routes carries the numbers of all the airways which coincide for that segment. When such is the case, pilots filing a flight plan need to indicate only that airway number for the route filed.</li>
                            <li>With respect to position reporting, reporting points are designated for VOR Airway Systems. Flights using Victor Airways will report over these points unless advised otherwise by ATC.</li>
                            </ol></ol>
                            <p>Here is an example of a victor airway. Notice the blue solid line eminating from the 276 radial off the western side of the Melbourne (MLB) VOR. Follow the airway to the west and you will see the label, "V441". This is pronounced "victor four forty-one". </p>
                            <p> </p>
                            <p><img src="/assets/trainingcenter/images/Victor_Airways.png" width="100%" /></p>
                            <p> </p>
                            <p>2. The L/MF airways (colored airways) are predicated solely on L/MF navigation aids and are depicted in brown on aeronautical charts and are identified by color name and number (e.g., Amber One). Green and Red airways are plotted east and west. Amber and Blue airways are plotted north and south. You will rarely come in contact with those in ZJX. </p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Jet Route Systems</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>The Jet Route System, called "J" followed by the route number, are routes established from 18,000 feet MSL to Flight Level 450 inclusive.</p>
                            <ol>
                            <li>These routes are depicted on Enroute High Altitude Charts. Jet routes are depicted in black on aeronautical charts and are identified by a "J" (Jet) followed by the airway number (e.g., J12). Jet routes, as VOR airways, are predicated solely on VOR or VORTAC navigation facilities (except in Alaska).</li>
                            <li>With respect to position reporting, reporting points are designated for jet route systems. Flights using jet routes will report over these points unless otherwise advised by ATC.</li>
                            </ol>
                            <p>The following ia an example of Jet Route 53. Notice the the Orlando (ORL) VOR. Follow the airway north on the 355 radial past WORMS and BARBS and you will see the J53 label. This is pronounced "jay five three" <strong>NOT</strong> "juliet five three".</p>
                            <p><img src="/assets/trainingcenter/images/Jet_Routes.png" width="100%" /></p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">RNAV Routes</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>These routes are from fixes and/or other navigation aids and include "Q" and "T" routes. These require a certified GPS or a DME/DME/IRU RNAV system.</p>
                            <ol>
                            <li>Q-ruotes are available for use by RNAV equipped aircraft between 18,000 feet MSL and FL450 inclusive. Q-routes are depicted on Enroute High Altitude Charts.</li>
                            <li>T-routes are available for use by RNAV equipped aircraft from 1,200 feet above the surface (or in some instances higher) up to but not including 18,000 feet MSL. T-routes are depicted on Enroute Low Altitude Charts.</li>
                            </ol>
                            <p>Q100 and Q102 are 2 commonly used RNAV routes in ZJX.</p>
                            <p><img src="/assets/trainingcenter/images/RNAV_Routes.png" width="100%" /></p>
                            <p>Here is an example of some T Routes. Notice the brown IR routes. These are military training routes (MTR). Generally, MTRs are established above 1500 and below 10,000 feet MSL for operations at speeds in excess of 250 knots and under IFR flight plan. VR routes are VFR in nature and are usually conducted below a ceiling of 3000 feet.</p>
                            <p><img src="/assets/trainingcenter/images/Low_RNAV_Routes.png" width="100%" /></p>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
</section>

@stop
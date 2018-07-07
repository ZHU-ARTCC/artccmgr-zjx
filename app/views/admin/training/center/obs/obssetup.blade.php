@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>VRC OBS Setup</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">How to Setup VRC</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>VRC (Virtual Radar Client) is the the radar client used in the US (VATUSA). VRC is used to connect to the VATSIM (Virtual Air Traffic SIMulation) network. VRC simulates the radar system used by air traffic controllers to guide aircraft along their routes through the simulated world on VATSIM.</p>

                            <p>1. <a href="http://www1.metacraft.com/VRC/download.shtml" target="_blank">Download VRC</a></p>

                            <p>2. Watch the following instructional video to help get started.</p>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/ybMbGGh2Mqs"></iframe>
                            </div>
                            <p></p>
                            <p>3. It is always recocmmended that you spend time familiarizing yourself with all of the VRC functions. There are many commands and shortcuts. Please begin reviewing these in the <a href="http://www1.metacraft.com/VRC/documentation.shtml" target="_blank">VRC documentation</a>. Many of them you will learn with training. </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">VRC OBS Settings</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <b><p>VRC Setup Refresher</p></b>
                            <p>1. All Sector Files, POF Files, Server Files and Alias Files from our website go directly into the MAIN VRC folder which should be found under "Program Files" => "VRC"</p>
                            <p>2. Under "File" load the sector file.</p>
                            <p>3. Under "Settings" => "Radar Mode", select "Ground"</p>
                            <p>4. Under "Settings" =>"Color Profile", Choose your preference</p>
                            <p>5. Under "Settings" => "General" => "Micelaneous tab", select the latest Alias File and latest POF File. </p>
                            <p>6. Under "Settings" => "General" => "Airspace Tab", Slide the slider to 300 NM and insert these airports in the arrival and departure fields:  KMCO,KDAB,KJAX,KTLH,KPNS,KSAV,KCHS,KMYR,KCAE</p>
                            <p>7. In the text box on the bottom of the screen, type:</p>
                            <p>.vis kjax</p>
                            <p>Hit the "Enter Key"</p>
                            <p>8. Under the "View Menu", Select the following:</p>
                            <p>Airport Labels<br />Runways<br />Runwway Centerlines<br />VOR<br />VOR Labels<br />ARTCC Boundries<br />High Boundries<br />Low Boundries<br />Region<br />Static Text<br />Geography</p>
                            <p>9. Under "View" => "Diagrams", a new window will appear. On the right side under "STARs", select the following plates:  # 4,5,6,99,125</p>
                            <p>10. At the top of the screen, look for FILTERS and QL. Click FILTERS until it says "OFF". Click QL until it says "ON". </p>
                            <p>11. Under the "Tools" Tab, select:<br /><br />Controller List<br />Aircraft List<br />Comms Panel<br /><br />12. Listening in to a controller.</p>
                            <p>Sometimes you are able to monitor a freqency by right clicking on the controller in the Controller and Chat box and selecting, "Monitor"</p>
                            <p>If this does not work, follow these instructions:</p>
                            <ol style="list-style-type: lower-alpha;">
                            <li>Open the Communication Tab, Choose an empty block. You will see 4 boxes at the bottom that need to be filled. </li>
                            <li>Select the contoller you wish to listen in the Controller and Chat Window. Right click on the controller and select "Open Chat", then right click and click"Request ATIS". Some information will populate in the chat box. You will need the information in the first line only. </li>
                            <li>Look back at the empty boxes. </li>
                            <li>In the "Position Name" Box, type the exact callsign seen the the controller and chat window. </li>
                            <li>In the "Frequency" Box, type the exact frequency seen the the controller and chat window. xxx.xxx</li>
                            <li>In the "Vox Server" Box, type the internet address preceding the "/" in the first line of the private chat window.</li>
                            <li>In the 'Vox Channel" Box, type verbatum what is seen AFTER the "/" in the first line of the private chat window.</li>
                            <li>Save Changes</li>
                            <li>Check the RX and HDST boxes. You should now be able to hear the frequency. </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

@stop
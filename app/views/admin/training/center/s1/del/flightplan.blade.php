@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>The Flightplan</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">The Flightplan</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>The Flight Plan can be accessed several ways in VRC.</p>
                            <ol>
                            <li>Double Click on the aircraft in the "Aircraft List"</li>
                            <li>Right click on the data tag of the aircraft on the radar screen and choose "Edit Flight Plan"</li>
                            <li>Right click on the appropriate aircraft flight strip in the flight strip bay and choose "Edit Flight Plan"</li>
                            <li>Push the F6 button on the keyboard, type the callsign in the text box and press enter.</li>
                            </ol>
                            <p> Here is an example of the Flight Plan:</p>
                            <p> <img src="http://www.healthcentraled.com/images/KJAXKBNAgood.png" alt="" width="506" height="224" /></p>
                            <p>All of the boxes can be edited except the callsign. All of the boxes should be completed except for the alternate field if not filed by the pilot and in some circumstances the scratchpad entry. It is <strong>YOUR</strong> responsility to ensure that the flight plan is correct and complete before issuing delivery to the aircraft. </p>
                            <p>Let's discuss the components:</p>
                            <p><strong>A/C Type: </strong>This box will contain 3 elements for each plan.</p>
                            <ul>
                            <li>The <strong>prefix</strong> which is not displayed in this example will be used for all "Heavy" aircraft. A <em>heavy </em>aircraft, according to the FAA's Air Traffic Control Policy, Order JO 7110.65V, effective April 3, 2014, is one that is <em>capable </em>of taking off at a weight of 300,000 pounds or more.  The key word here is capable - an aircraft can operate with less than 300,000 pounds during take off and still be classified as "heavy" under this air traffic control policy.  Examples include but are not limited to B767, B777, B787, A300, A330, A340, MD11, C17 etc. The heavy designation will be noted with <strong>H/ </strong>typed in front of the aircraft type. For example,<strong> H/B763/L.</strong> Sometime you will notice a T/ prefix that the pilot has filed which notates that the aircraft is TCAS (traffic collision avoidance system) equipped. If this was prefiled you may leave it but if the aircraft is "heavy" it should be replaced. </li>
                            <li>Aircraft Type - All aircraft that are non experimantal have an abbreviated IACO code. This abbreviation will be inserted here. If you are unsure of the aircraft type based on what they have filed OR they have filed an obvioulsy wrong abbreviation, you may use this <a title="Aircraft Codes" href="http://www.flugzeuginfo.net/table_accodes_en.php">reference</a> to help. This reference also has the weight class of the aircraft to help you determine if it is a heavy aircraft designated as "H" in the table. </li>
                            <li>Equipment suffix - The equipment suffix essentially describes how the aircraft is capable of navigating the route. Some aircraft use very basic navigation with radios only and the modern jetliners use complex satalite area navigation computers. Here is a list of the current suffixes. The suffix is <strong>important</strong> to the radar controller when issuing intructions to the pilot and should be completed. </li>
                            </ul>
                            <p><img src="http://www.healthcentraled.com/images/ACequipcodes.png" alt="" width="505" height="551" /></p>
                            <p>Many times the pilot will file their plan with the correct suffix. Many times the will not. Reasons for not filing this information may be an error in filing or an inexperinced pilot who is still learning. </p>
                            <p>RVSM - Reduced Verticle Separation Minimums was implemented to reduce the vertical separation above flight level (<abbr title="flight level">FL</abbr>) 290 from 2000-ft minimum to 1000-ft minimum. It allows aircraft to safely fly more optimum profiles, gain fuel savings and increase airspace capacity. The process of safely changing the separation standard required a study to assess the actual performance of airspace users under the old vertical separation standard of 2000-ft and potential performance under the new standard 1000-ft. In 1988, the <abbr>ICAO</abbr> Review of General Concept of Separation Panel (<abbr title="Review of General Concept of Separation Panel">RGCSP</abbr>) completed this study and concluded that safe implementation of the 1000-ft separation standard was technically feasible. <abbr>RVSM</abbr> was subsequently implemented and today <abbr>RVSM</abbr> represents a global standard for 1000-ft vertical separation. VATSIM <strong>does not</strong> simulate 2000 ft separation until FL410 and the <strong><em>NO RVSM</em></strong> suffixes will not be simulated. All aircraft will be separated by 1000 feet up to FL410.</p>
                            <p>The simplest way to obtain the correct code is to be familar with 3 suffixes. A, G , and L.</p>
                            <p>Inquire of the pilot if he has one of the following:</p>
                            <ol>
                            <li>Do you have a flight management computer (FMS, FMC)? - If yes, the aircraft is <strong>/L.</strong> If not, move to #2.</li>
                            <li>Do you have a GPS? If yes, the aircraft is <strong>/G</strong>. If not move to #3.</li>
                            <li>At this point we can assume the aircraft is <strong>/A</strong> and will be flying with navigational radios only.</li>
                            </ol>
                            <p> </p>
                            <p><strong>Flight Rules: </strong>Select the appropriate flight rules from the drop down menu if filed in error or if you are creating a new plan for the pilot.</p>
                            <p><strong>Departure Field and Arrival Field</strong> - Self explanatory. Sometimes, however, they are misspelled. </p>
                            <p><strong>Alternate Field- </strong>This will be completed by experienced pilots and does not need to be completed if not done so by the pilot. </p>
                            <p><strong>Cruise Altitude- </strong>Please ensure that the cruise altitude is compatable with direction of flight as noted in the previous section. </p>
                            <p><strong>Scratchpad Entry-  </strong>This box is used for expediting communications and will be covered by your instructor as it pertains to the individual field's local procedures. </p>
                            <p><strong>Squawk- </strong>This is the 4 digit beacon code which you generate by pushing the associated button. The codes are generated by the POF file. </p>
                            <p><strong>Route</strong>- The route is filed by the pilot and may need to be ammended or completely changed based on the pilots experience. The most common ammendment is the Standard Instrument Departure (SID). </p>
                            <p><strong>Remarks</strong>- This are contains the type of voice capability and any other notes as filed by the pilot or added by the controller. You may add to this if needed. A common addition is the company name of the aircraft as there are many unfamiliar virtual airlines. For example if you were unsure that AAL354 was "American Airlines", you could type "American" in the remarks area. </p>
                            <p style="padding-left: 30px;"><strong>Voice Capability</strong></p>
                            <ul>
                                <li style="padding-left: 30px;">/V/ - Voice transmit and receive.</li>
                                <li style="padding-left: 30px;">/R/- Text transmit and voice receive ."Receice Only"</li>
                                <li style="padding-left: 30px;">/T/- Text transmit and text receive. "Text Only"</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
</section>


@stop
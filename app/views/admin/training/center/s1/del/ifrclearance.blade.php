@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Introduction to IFR Clearance Delivery</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Introduction to IFR Clearances</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>IFR Clearances are among the easiest clearances to give. They are fairly static, only changing to give the correct information based upon their flight plan. After checking their route, SID, altitude, and other information, it's just a matter of applying CRAFT and issuing the clearance.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Issuing the Clearance</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Here is an example of a completed and correct flight plan. As you can see SWA2528 is a Boeing 737-800 (B738), and has a FMS with RVSM capabilities (/L) for his navigation equipment. He is flying on Instrument Flight Rules, or IFR. He is leaving Jacksonville International Airport (KJAX), and is going to Nashville International Airport (KBNA). He has a cruise altitude of 40,000ft or Flight Level four zero zero (FL400). He is leaving KJAX via the Jacksonville Six departure and going to the Alma VOR (JAX6 AMG). He will then take the J45 to the Atlanta VOR (ATL) and join the VOLLS seven arrival into Nashville (ATL VOLLS7). He has been assigned a squawk code of 1001 by the controller. Sounds like a lot of information? That's because it is, but as the delivery controller it is what you need to know and understand. </p>
                            <p><img src="http://www.healthcentraled.com/images/KJAXKBNAgood.png" alt="" width="50%" /></p>
                            <p>You will be the first controller the pilot speaks to. It is important that you listen to what the pilot says as they may have extra information that you would need to pass along to the other ATCs or put in his remarks, or possibly just a question. Also be aware that pilots may just call up for a radio check at first. Now let's get into how to read this to the pilot as part of his IFR clearance. For this scenario we will assume the KJAX airport is completely staffed up and ATIS information A is current landing and departing rwys 8 and 14.</p>
                            <p>When it comes to callsigns for airlines, it is very common for there to be up to four numbers after the callsign prefix (Ex. SWA2528). When this happens you can do one of two things. Say the callsign, then each number individually (ex. Southwest two five two eight) ,or say the callsign then group the numbers in couplets (ex. Southwest twenty five twenty eight). If you come across and aircraft that has three numbers in the callsign, group the last two numbers only. DAL123 would be "Delta one twenty three. Sticking to this guideline will help you sound very professional.</p>
                            <p>Pilot: "Jacksonville clearance delivery, Southwest 2528 requesting IFR clearance to Nashville International."</p>
                            <p>ATC: "Southwest 2528, Jacksonville clearance delivery. You are cleared to the Nashville International <strong>AIRPORT,</strong> Jacksonville six departure, then as filed. Climb via  SID. Departure frequency 127.00, squawk 1001."</p>
                            <p>Pilot: "Cleared to the Nashville International Airport, Jacksonville six departure, then as filed. Climb via  SID. Departure frequency 127.0, and squawk 1001 for Southwest 2528."</p>
                            <p>ATC: "Southwest 2528, read back correct."</p>
                            <p>Now that was a great clearance! Throughout your time on VATSIM keep in mind that pilot's may still be learning just as you are, and may need some extra help or at least be pointed in the right direction. So do not get frustrated if you need to repeat some things to the pilot. Also, some pilot's on VATSIM may not know a lot of the real world procedures. I.E they don't call up with the ATIS code when requesting clearance (as in this example), or do not know that they can switch to ground control on their own. So you may have to end their clearance with this.</p>
                            <p>ATC: "Southwest 2528, read back correct. ATIS information Alpha is current. Contact Jacksonville Ground on 121.90 when ready for the push." </p>
                            <p>Again, keep in mind that this may vary between pilots so just amend what you have to say to each pilot as you go. I.E Just GND's freq or just the ATIS info.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Amending the Filed Altitude</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Remember to use the rule East is odd, West is even. If you do not know what direction the destination airport is in relation to the originating airport, you can use many resources to help you figure that out. One is by zooming out and pressing the PLOT button on the flight plan which will draw a yellow line along the general direction of the filed route in VRC. If you know of any 3<sup>rd</sup> party sources you may use those as well. But familiarizing yourself with a map/chart of the world is the best way, and that will come with time. </p>
                            <p><img src="http://www.healthcentraled.com/images/Wrongalt.png" alt="" width="50%" /></p>
                            <p>Look at AWE1794's flight plan. See anything wrong with it? AWE1794 is going on a North East bound flight from Jacksonville to Charlotte. This aircraft will need  an odd altitude for his cruise altitude. He has filed 32,000ft (FL320) for his cruise. This happens every so often because the pilot is not paying attention and or is new and may not know this rule. And it is your job to catch and fix this when it happens. So to help the pilot out without changing things too drastically,  the best thing to do is to offer them 1,000 ft above <strong>OR</strong> below their filed altitude. Let's look at this example. </p>
                            <p>Pilot: "Jacksonville Delivery, AWE1794 requesting IFR clearance to Charlotte - Douglas International Airport, information A." </p>
                            <p>ATC: "AWE1794, Jacksonville Delivery. Your filed cruise altitude is invalid for your direction of flight. Can you accept FL310 or FL330?"  </p>
                            <p>Pilot: "Oh sorry. We'll take FL310 please. AWE1794."</p>
                            <p>ATC: "AWE1794 roger. Thanks."</p>
                            <p>The pilot of AWE1794 request to change his cruse altitude to FL310. So, at this point you would change his cruise altitude to 31,000ft in the flight plan and then click the amend button or the return key. Now that it is fixed, you can read the pilot his clearance like you would to any other aircraft!</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Assigning a SID</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Sometimes there will be pilots who file a flight plan out of an airport with SIDs, but do not put a SID in their flight plan. This is not necessarily wrong, however SIDs help out the departure controller a lot by reducing the work load on the controller and pilot. If a SID is available, always try to fly it! At Jacksonville there are SIDs that go in all directions, but not every aircraft can fly all of the SIDs. This may depend on the aircraft's performance, aircraft type, navigation equipment, and the aircraft's direction of flight. Not including the pilot's knowledge and or comfort level with flying SIDs, there are three basic nav equipment codes you should know and these determine what procedures the aircraft itself can fly. /A means radio navigation only with DME, /G means an IFR rated GPS, and /L means FMC/FMS with RVSM capabilities. (There are many others so please reference the equipment codes list to see them) Out of the three above know that a /A aircraft can NOT fly RNAV procedures. /G and /L can fly any procedure out there so long as the aircraft itself is capable of flying it. </p>
                            <p><img src="http://www.healthcentraled.com/images/NeedSID.png" alt="" width="50%" /></p>
                            <p>So let's look at SWA2459's flight plan. We see that it is a Boeing 737-700 with a FMC and RVSM capabilities (B737/L). There is not an IFR procedure out there that this plane cannot do. We will also say for this scenario that the pilot can and will accept a SID, he just needs help from you to find the best one. Now look at the list of SIDS for KJAX and find the best one for this aircraft. You should be able to determine pretty quickly that the SAWGY2 and the EXBOX2 departures are the better options. Why? Because both of these SIDs go well with his SE bound direction of flight and they both have the OMN VOR which this pilot has already filed. Now look further into them and you'll see they are both HYBRID SIDs, but one is RNAV and the other is not. The EXBOX2 is a RNAV SID and SWA2459 is /L. So he is capable of both SIDs, but the EXBOX2 would be the best choice for his equipment type. If for whatever reason he could not accept the EXBOX2, you would then offer him the SAWGY2. If he can accept either, that is a different situation and we will go over that later. Now let's go over how to say this on frequency to the pilot and get this sorted out. </p>
                            <p>Pilot: "Jacksonville Delivery, SWA2459 requesting IFR clearance to Fort Lauderdale International Airport. We have info A." </p>
                            <p>ATC: "SWA2459, Jacksonville Delivery. Are you able to accept a SID?"</p>
                            <p>Pilot: "Yes sir! SWA2459."</p>
                            <p>ATC: "SWA2459, can you accept the EXBOX2 departure with OMN transition?"</p>
                            <p>Pilot: "We can accept that, SWA2459."</p>
                            <p>Now at this point you would insert EXBOX2 just before OMN in the ROUTE box of his flight plan and click amend. Again if you do not amend the flight plan it will automatically revert back to the original after a short time. Then you would issue him his IFR clearance like normal. </p>
                            <p>ATC: "SWA2459, you are cleared to the Fort Lauderdale International Airport. EXBOX2 departure, OMN transition, then as filed. Climb via SID. Departure frequency 127.00, squawk 2615."</p>
                            <p>Here is the corrected flight plan:</p>
                            <p><img src="http://www.healthcentraled.com/images/NeedSIDfix.png" alt="" width="50%" /> </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Issuing Non-SID Clearance</a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Again sometimes pilots will fly out of an airport that offer published SIDs, but choose not to file or fly one. This is not necessarily wrong, and it happens all the time. Many factors can play into this, but that is all up to the pilot. Even if the aircraft and nav equipment are capable of flying a SID the pilot may choose not to and that is OK. You may even see "NO SID/STAR" in the remarks section of the flight plan. If you do see that, don't even bother asking them if they will. Not only would it be a waste of time, but it would show the pilot you are not paying attention to his flight plan. Remember, an aircraft is NEVER required to fly a SID or STAR. </p>
                            <p>On a side note, there are situations that may come up where the airspace is so busy that in order to get out the pilot must fly a SID to help with the traffic flow. If he cannot accept a SID advise the pilot he will have to wait until controller workload dies down and ATC can accommodate the pilot, then give him an ETA of when that may be. You can still clear the pilot as filed, just let him know of the delay and why. "N123AB, read back is correct. Expect a 15 minute delay due to ATC workload/traffic congestion."</p>
                            <p><img src="http://www.healthcentraled.com/images/NoSID.png" alt="" width="50%" /></p>
                            <p>Looking at N418MG's flight plan we see that he did not file a SID. He filed to fly direct VOR to VOR which is perfectly fine. Seeing that he is flying a Cirrus 22 and has an IFR certified GPS we know the aircraft itself is capable of flying a SID out of KJAX (SR22/G). There is also nothing in the remarks about SIDs or STARs, so it is ok to ask when he calls for clearance. Let's listen in.</p>
                            <p>Pilot: "Jacksonville Delivery, Cirrus N418MG requesting IFR clearance to Tallahassee Regional Airport. We have ATIS A."</p>
                            <p>ATC: "Cirrus N418MG, Jacksonville Delivery. Are you able to accept a SID?"</p>
                            <p>Pilot: "Negative, we left our charts at home..." </p>
                            <p>ATC: "Roger, no problem."</p>
                            <p>At this point you would talk to the departure controller and see if they are ok with 8MG not flying a SID and if you need to tell the pilot anything. </p>
                            <p>JAX_DEL: "JAX approach, JAX Delivery?"</p>
                            <p>JAX_APP: "JAX approach, go ahead."</p>
                            <p>JAX_DEL: "N418MG requesting TAY as first waypoint, can't take a SID."</p>
                            <p>JAX_APP: "N418MG Radar Vectors to TAY approved. HS."</p>
                            <p>JAX_DEL: "CO"</p>
                            <p>Now that we have determined we will clear him as filed without a SID, and that the rest of his FP is correct we are now ready to give clearance delivery.The initial altitude for KJAX is 3,000 feet. </p>
                            <p>Back to the pilot!</p>
                            <p>ATC: "Cirrus 8MG, you are cleared to the Tallahassee Regional Airport <strong>via fly runway heading, radar vectors to the TAY VOR then as filed.</strong> Maintain 3,000. Expect one-four thousand one zero minutes after departure. Departure frequency 127.00. Squawk 2608."</p>
                            <p>Pilot: "Cleared to Tallahassee Regional Airport via fly runway heading, radar vectors to the TAY VOR then as filed.  Maintain 3,000.  Expect one-four thousand in 10. Departure is on 127.00, and squawk 2608. Cirrus 8MG."</p>
                            <p>ATC: "N8MG, read back correct." </p>
                            <p><strong>The heading can always be amended by the Local (Tower) controller.</strong></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Full Route Clearance</a>
                        </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Like the other examples before, every now and then you will get a pilot that either files direct or doesn't have a route in their flight plan at all. For General Aviation it is not uncommon for IFR flights to be filed DIRECT. When you see this do not dismiss it immediately, look to see where they are going first and determine if they need to be rerouted or not. If it is from a low traffic airport to another (KJAX-KDAB for instance) you may clear the aircraft as filed, or direct, so long as the appropriate radar controllers do not have a problem with it. Keep in mind that VATSIM is a learning environment and the pilot's may not know real world rules and procedures. In the real world Part 121 operations, or the airlines, will never file a direct flight plan. But this is VATSIM and you may see that happen because the pilot is new, or they just want to fly direct anyway. The flight plan below is for a flight between Jacksonville International and Tampa International. Depending the time of day, or day of the week, KTPA can be pretty busy. For this scenario we are going to say that for ATC purposes this pilot needs to have some sort of routing. So we will say this pilot can accept a route, but just needs help finding a good route to fly.  </p>
                            <p><img src="http://www.healthcentraled.com/images/fullroute.png" alt="" width="50%" /></p>
                            <p>JBU1418 is an Embraer 195 with a FMC and RVSM capabilities (E195/L). So there is not an IFR procedure out there that this plane cannot do. So let's find a good route for this plane based on his direction of travel, nav equipment capabilities, and destination airport. Start by looking at SIDs for KJAX. You should see that the JAX6 and JETIN2 departures would both work for this pilot. Now look at STARS (arrival procedures) for KTPA. Out of all the STARS the DADES4 is the only one that makes sense without taking this pilot too far out of the way. You should also notice that JAYJA is a transition on both the JETIN2 departure and the DADES4 arrival. So let's offer JBU1418 the route JETIN2 JAYJA DADES4. But before you do that, make sure everything else in the flight plan is correct. In this case, the rest of the plan is complete.  Here's how it should go.</p>
                            <p>Pilot: "Jacksonville Delivery, JBU1418 requesting IFR clearance to Tampa International Airport. We have ATIS info A."</p>
                            <p>ATC: "JBU1418, Jacksonville Delivery. Unfortunately I am unable to clear you direct Tampa due to traffic volume at Tampa Airport. Are you able to accept a reroute?"</p>
                            <p>Pilot: "Yes sir we can take a reroute. Go ahead. JBU1418."</p>
                            <p>ATC: "JBU1418, you are cleared to the Tampa International Airport. JETIN2 departure, JAYJA transition, DADES4 arrival. Climb via SID. Departure frequency 127.00. Squawk 2633."</p>
                            <p>Pilot: "Cleared to Tampa International Airport JETIN2 departure, JAYJA transition, DADES4 arrival. Climb via SID. Departure is on 127.00, and squawk 2633. JBU1418."</p>
                            <p>ATC: "JBU1418, read back correct."</p>
                            <p>Here is the corrected plan:</p>
                            <p><img src="http://www.healthcentraled.com/images/fullroutefixed.png" alt="" width="50%" /></p>
                            <p>Sounds like a lot? Well it can be. That is called a "Full Route Clearance" and at some times it can be a lot longer than that. But do not worry, if the pilot is going to an airport you are unfamiliar with or one that is far away and you may not know the points in between the SIDs and STARS there are many web based resources you can use. <a href="http://flightaware.com/statistics/ifr-route/">Flightaware.com</a> would be the best website for that situation as it gives you real world routes and altitudes while also showing you the type of aircraft that just flew that route. But if you know another source feel free to use that as well. There is a link on our website under the "Pilot" drop down menu. </p>
                            <p>Keep in mind as well that the pilot may have a route, but neglected to put it in his flight plan. If that happens you may ask them to refile with a route. If they say they do not have one, then go through the process of finding them a route. </p>
                            <p>ATC: "JBU1418, JAX Delivery. I do not have a route in your flight plan for you. Would you mind re-filling with a route?"</p>
                            <p>Pilot: "Sorry about that! We'll re-file right away. JBU1418."</p>
                            <p> </p>
                            <p> </p>
                            <p>Here are a few more examples of full route clearances. Focus on how the route is phrased in the clearance and reference what it would look like in flight plan above the dialog. </p>
                            <p> </p>
                            <p>JBU426 (A320/L): KJAX-KJFK</p>
                            <p>Route: CROSB2 WISPR SAV CHS J121 SIE CAMRN4</p>
                            <p>ATC: "JBU426, Jacksonville Delivery. Cleared to the John F. Kennedy International Airport CROSB2 departure, WISPR transition, <strong>Direct</strong> the SAV(Savannah) VOR ,<strong>Direct</strong> the CHS (Charleston) VOR, J121 to SIE (Sierra India Echo) VOR, CAMRN4 arrival. Climb via SID. Departure frequency 127.00. Squawk 2655."</p>
                            <p>If you are unsure of the name of the VOR, spell it phoenetically. You will likely also have to spell fixes. </p>
                            <p> </p>
                            <p> </p>
                            <p>N64344 (C172/G): KJAX-KPNS</p>
                            <p>Route: TAY SZW J2 CEW PENSI</p>
                            <p>ATC: "Skyhawk N64344, Jacksonville Delivery. Cleared to the Pensacola International Airport  via fly runway heading radar vectors TAY (Taylor) VOR,  V198 to CEW(Charlie Echo Whiskey) VOR ,<strong>Direct</strong> PENSI, <strong>Direct</strong> . Maintain 3,000. Expect 8,000 one zero minutes after departure. Departure frequency 127.00. Squawk 2612." </p>
                            <p>Notice when there is no STAR , the word <strong>Direct</strong> is used after the last waypoint meaning that they will fly directly to the arrival field at that point. </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
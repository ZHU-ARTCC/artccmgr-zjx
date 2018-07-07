@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Introduction to Air Traffic Control</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Introduction</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Please enjoy a short video from the FAA.</p>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/M9roMBwOX8s"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Useful Links</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Here are some useful links that will help you with reference and education.</p>
                            <p><strong>General Reference</strong></p>
                            <p><a title="FAA ATC Order" href="https://www.faa.gov/documentLibrary/media/Order/ATC.pdf" target="_blank">JO 7110.65</a>  -  <strong>FAA Order 7110.65</strong> is an FAA manual that prescribes air traffic control (ATC) procedures and phraseology for use by personnel providing ATC services in the USA. It is also informally known as 'The Bible' in controller circles. The current version and subsequent lettered versions (as well as changes to the current version) are published according to the publication schedule contained within the order (paragraph 1-1-6), usually every 6 months. All infomation for training in this ARTCC is derived from this order. </p>
                            <p><a href="http://www.faa.gov/air_traffic/publications/atpubs/aim/aim0501.html#@$D2d0webb" target="_blank">Equipment Suffix</a></p>
                            <p><a href="http://www.faa.gov/documentLibrary/media/Advisory_Circular/AC_90-23G.pdf" target="_blank">Wake Turbulence</a></p>
                            <p><strong>Airport Information</strong></p>
                            <p><a href="http://www.aircharts.org/" target="_blank">Aircharts.org</a> - Provides useful information about Airports and associated charts</p>
                            <p><a href="http://www.airnav.com/" target="_blank">Airnav.com</a> - Provides useful information about Airports, Navaids and Fixes.</p>
                            <p><a href="http://skyvector.com/" target="_blank">Skyvector.com</a> - Provides information about Airports, Charts including sectionals, TACs, Enroute high and low airways. Also noted are Temporary Flight Restrictions (TFRs).</p>
                            <p><a href="http://www.orlandoairports.net/ops/airlines.htm" target="_blank">Orlando Airline Parking Information</a></p>
                            <p><a href="http://www.orlandoairports.net/ops/images/maps/gate_locations.pdf" target="_blank">Orlando Gate Information</a></p>
                            <p><strong>Weather Information</strong></p>
                            <p><a href="http://www.wunderground.com/metarFAQ.asp" target="_blank">How to Interpret a METAR</a> (Meteorological Aerodrome Report)</p>
                            <p><a href="http://www.met.tamu.edu/class/metar/quick-metar.html" target="_blank">Metar Decoding</a></p>
                            <p><a href="http://www.aviationweather.gov/static/help/taf-decode.php" target="_blank">TAF (Terminal Aerodrome Forecast) Decoding</a></p>
                            <p> </p>
                            <p><strong>Aircraft Information</strong></p>
                            <p> <a href="http://www.flugzeuginfo.net/table_accodes_en.php" target="_blank">ICAO (International Civil Aviation Organization) Aircraft Codes</a> - This site provides the "aircraft abbreviation" based on the ICAO. This site will also provide the wake category. This site can be searched using the "Ctrl F"  function. This is useful when ammending the aircraft type in the flight plan. </p>
                            <p><a href="http://aspmhelp.faa.gov/index.php/Weight_Class" target="_blank">Weight Class</a></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Communicating with Aircraft</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                    <p>For every message you send over a radio or landline, there is a standard format that an air traffic controller (ATC) follows.<br /><br />For example, here is the order of things in the message when first communicating with an aircraft (initial contact):<br /><br /></p>
                    <ol>
                    <li>Identification of the aircraft. The callsign is used with <strong>EVERY</strong> transmission. The callsign can be said several different ways. The controller can simply say the tail number of the aircraft as in, "N12345" or use one of the following standard methods:<ol>
                    <li>Airline Name and Flight Number "DAL561" is said "Delta Fife Sixty one."</li>
                    <li>Aircraft Manufacturer "Cessna N517CC" would be pronounced "Cessna fife one seven charlie charlie"</li>
                    <li>Aircraft Model "Skyhawk N517CC"</li>
                    </ol></li>
                    <li>Controller's identification - whatever the control position is - spoken as Facility and position - "Jacksonville Tower"</li>
                    <li>Your message! What are you actually trying to say</li>
                    </ol>
                    <p>Once you have spoken to the aircraft on initial contact, you need <strong>NOT</strong> repeat your controller position. </p>
                    <p> </p>
                    <p><strong>Aircraft Identification</strong></p>
                    <p>It is very important that you are able to clearly identify an aircraft when issuing an instruction. Improper use of call signs can result in pilots executing an instruction intended for another aircraft.<br /><br />Pilots must be certain that aircraft identification is complete and clearly understood before taking action on an ATC clearance. Controllers should <strong>not</strong> abbreviate call signs of air carrier or other civil aircraft having authorized call signs.</p>
                    <p>Controllers <strong>may</strong> initiate abbreviated call signs of aircraft with alphaneumeric call signs by using the prefix and the last three digits/letters of the aircraft identification <strong>after</strong> initial communications are established.<br /><br /></p>
                    <p>Let's look at an example. King Air N517CC is a Beech King Air (B350). </p>
                    <p><br />During <strong>initial</strong> communication both the pilot and controller will use the <strong>entire</strong> call sign. </p>
                    <p>Beech N517CC or N517CC<em> "Beech November Fife One Seven Charlie Charlie"</em></p>
                    <p>During subsequent transmissions, the call signed can be shortened in 2 acceptable fashions. </p>
                    <ol>
                    <li>The N followed by the last 3 digits in the callsign - N7CC "<em>November Seven Charlie Charlie"</em><strong> OR</strong></li>
                    <li>The aircraft type followed by the last 3 digits in the callsign. King Air 7CC "<em>King Air Seven Charlie Charlie"</em></li>
                    </ol>
                    <p>The pilot may use the abbreviated call sign in subsequent contacts with the controller. When aware of similar/identical call signs, controllers should take action to minimize errors by emphasizing certain numbers/letters, by repeating the entire call sign, by repeating the prefix, or by asking pilots to use a different call sign temporarily. Pilots should use the phrase "VERIFY CLEARANCE FOR (complete callsign)" if doubt exists concerning proper identity.</p>
                    <p>Air carriers and commuter air carriers having FAA authorized call signs should be identified by stating the <strong>complete</strong> call sign (using group form for the numbers) and the word "heavy" if appropriate. For example, DAL561 "Delta Fife Sixty-One Heavy", ENY2163<em> "Envoy Twenty One Sixty Tree"</em></p>
                    <p>Military aircraft use a variety of systems including serial numbers, word call signs, and a combination of letters/numbers. See the chart below for proper abbeviations. </p>
                    <p><img src="http://www.healthcentraled.com/images/Branch%20of%20Service.png" alt="" width="412" height="283" /></p>
                    <p>Here are a few examples:</p>
                    <p>A30865 <em>"Air Force Tree Zero Eight Six Fife"</em></p>
                    <p>VVGAK21 <em>"Navy Golf Alpha Kilo two one"</em></p>
                    <p>Some military callsigns are names and read as filed.</p>
                    <p>MOTOWN21 <em>"Motown two one"</em></p>
                    <p>RATTLESNAKE34 <em>"Rattlesnake tree four"</em></p>
                    <p>REACH1208<em> "Reach twelve zero eight" </em> Common Military Transport Callsign</p>
                </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Phonetic Alphabet - How do you say that?</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p><strong>All</strong> controllers will need to memorize the NATO Phoenetic Alphabet.</p>
                            <p>The <strong>NATO phonetic alphabet</strong>, more accurately known as the <strong>International Radiotelephony Spelling Alphabet</strong> and also called the <strong>ICAO phonetic</strong> or <strong>ICAO spelling alphabet</strong>, as well as the <strong>ITU</strong><strong> phonetic alphabet</strong>, is the most widely used spelling alphabet. Although often called "phonetic alphabets", spelling alphabets are not associated with phonetic transcription systems such as the International Phoenetic Alphabet. Instead, the International Civil Aviation Organization (ICAO) alphabet assigned code words acrophonically to the letters of the English Alphabet so that critical combinations of letters and numbers can be pronounced and understood by those who transmit and receive voice messages by radio or telephone regardless of language barriers or the presence of transmission static.</p>
                            <p>Pay special attention to 3, 5 and 9. They are pronounced "tree", "fife" and "niner" respectively. 5 and 9 are often mistaken for one another with standard pronunciation. </p>
                            <p><img src="http://www.healthcentraled.com/images/Phoenetic%20Alphabet.png"/></p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
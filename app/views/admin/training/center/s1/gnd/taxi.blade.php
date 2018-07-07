@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Taxiing Aircraft</h2>
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
                            <p>Taxiing aircraft is simple, but requires some level of concentration when you have multiple aircraft moving on the airfield. It is your job to keep them separated, sequenced, and moving smoothly about the airfield.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Taxiing an Aircraft to the Runway</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>As of 30 June, 2010, the phraseology for taxiing aircraft to a runway has changed. You must first state the runway you are taxiing them to, followed by the taxi route. This is addressed by FAA Order JO 7110.65T, Paragraph 3-2-3 modified by FAA N JO 7110.528. <br /><br /> <em>Runway (runway designation), taxi via (route), (holding instructions as required).</em> <br /><br /><strong>Example 1 at KMCO (No crossing runway): </strong></p>
                            <p>United 679, Runway 18L, taxi via B7, C, B1.</p>
                            <p><strong>Example 2 at KDAB (Crossing Runway): RW 25 and 34 are active.</strong></p>
                            <p><em>Delta 236, Runway 25, taxi via November,  hold short runway 34. </em><br /><br /> As an aircraft approaches RW 34 or when you are able to cross him:<br /><br /> <em>Delta 236, Cross runway 34. </em><br /><br /> You can issue hold short instructions of any point on the airfield including taxiways and runways. Before you can issue a crossing clearance, an aircraft or vehicle must be clear of the runway they previously received a crossing clearance for unless the runways centerlines are less than 1000 feet apart.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Sequencing and Priority</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p><strong>Sequencing</strong><br /><br /> You can easily tell an aircraft to follow another aircraft going to the same place by adding the terminology "Follow the (type of aircraft) on (taxiway/runway)". The pilot will be responsible for maintaining a safe distance behind that aircraft. The runway number and any hold short instructions <strong>should</strong> be issued.</p>
                            <p>Example at KORL: N717CC, Runway 7, Follow the cessna 172 exiting the ramp, cross runway 13.<br /><br /> <strong>Priority</strong></p>
                            <ul>
                            <li>Other than emergencies, aircraft will have priority and <strong>not</strong> be told to give way when they are already established on a taxiway another aircraft will cross or turn on to.</li>
                            <li>If neither aircraft is established, the departure aircraft will have priority.</li>
                            <li>When both are arrival or both are departures and neither are established, the controller shall choose who shall give way to whom.</li>
                            </ul>
                            <p><strong>Commonly used ground phraseology</strong>:</p>
                            <ul>
                            <li><em>Hold position.</em></li>
                            <li><em>Hold short of taxiway (X)</em></li>
                            <li><em>Continue Taxi</em></li>
                            <li><em>Give way to (type of aircraft) (location of aircraft) -   </em><strong>Example: </strong><em>Delta 343, Runway 35L, taxi via H4, G, <strong>give way</strong> to the company B737 entering the ramp.</em></li>
                            <li><em>Follow (type of aircraft)</em></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Frequency Changes</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Coordinate with Local Control to decide whether to do "Contact Tower" or "Monitor Tower". Monitor Tower is best for heavy traffic times to keep the frequency congestion to a minimum with pilots checking in.</p>
                            <p>If Local is okay with standard Contact Tower operations, keep in mind that ground control is <u>NOT</u> required to issue the instruction Contact Tower. US regulations tell pilots to contact tower when ready for departure and most will do so on their own.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
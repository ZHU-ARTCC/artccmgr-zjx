@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Point Out</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Point Out</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            "RADAR POINT OUT- An action taken by a controller to transfer the radar identification of an aircraft to another controller if the aircraft will or may enter the airspace or protected airspace of another controller and radio communications will not be transferred."
                            When initiating the handoff the following items must be included:
                            <li> The Phrase "Point Out"
                            <li>The location of the aircraft, unless physically pointing to the controller's screen.
                            <li>The aircraft callsign, or squawk code if no callsign is displayed
                            <li>The Altitude of the aircraft
                            <li>Your Intentions
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Possible Responses</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            Once the receiving controller identifies the aircraft, he will issue one of the following instructions:

                            <li>"POINTOUT APPROVED" - If the receiving controller states this, then your aircraft can enter his airspace as requested, and you can retain control of the aircraft.

                            <li>"RADAR CONTACT" - If the receiving controller states this, then in order for your aircraft to enter his airspace, you must hand the aircraft off to him.

                            <li>"YOUR CONTROL" - If the receiving controller states this, then you can do whatever you want to do with your aircraft inside of his airspace.

                            <li>"UNABLE" - If the receiving controller states this, then your aircraft may not enter his airspace at all.
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
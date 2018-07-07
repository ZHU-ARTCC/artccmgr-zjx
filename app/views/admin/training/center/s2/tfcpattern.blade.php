@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>VFR Tower</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">The Pattern</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gU0CX-oIJ78"></iframe>
                            </div> and less reliant on radar positions and more of looking out the windows. VFR aircraft are a special creature to control as well.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">The Legs</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <img src="/assets/images/tfcpattern.jpg" width="100%" />
                            <p>The Pattern is defined by 5 legs:</p>
                            <ul>
                            <li><strong>Upwind Leg</strong> - Upwind leg goes from the departure end of the runway straight out runway heading. Also called the Departure Leg, or Takeoff Leg.</li>
                            <li><strong>Crosswind Leg</strong> - Crosswind Leg is the 90 degree line from upwind to downwind. Aircraft will often turn onto the Crosswind Leg once passing 600 feet AGL unless they are a slow climber and go by estimated distances.</li>
                            <li><strong>Downwind Leg</strong> - The leg parallel and opposite direction of the active runway.</li>
                            <li><strong>Base Leg</strong> - Once an aircraft gets to about a 45 degree angle from the corner of the approach end of the target runway, an aircraft will turn onto the base leg. The base leg connects the downwind leg to the final leg.</li>
                            <li><strong>Final Leg</strong> - This is the last, or final, leg of the pattern and takes them back to the runway.</li>
                            </ul>
                            <br />
                            <p><strong>Pattern Entry:</strong><br /> Aircraft can enter the pattern at any leg. Aircraft entering the pattern on the final leg are instructed to make a "Straight In Approach Runway ___". Aircraft perpendicular to the downwind leg will often enter at a 45 degree angle as depicted above titled "Entry".</p>
                            <p><strong>Pattern Departures:</strong><br /> Aircraft making a straight out departure will either exit straight, or pass the point of crosswind, then turn to a 45 degree departing angle. Aircraft departing any other leg will turn onto that leg then continue out and beyond the tower area before adjusting their course so as to not conflict with aircraft in the pattern.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
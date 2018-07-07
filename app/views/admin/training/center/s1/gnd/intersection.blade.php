@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Intersection Departures</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Intersection Departures</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Intersection departures are where an aircraft requests to depart a runway from an intersection of a taxiway and the runway other than the taxi at the departure end of the runway (Full Length). If an aircraft requests this, you would append it to the runway at the beginning of the taxi route and the distance remaining: Runway (designator) at (taxiway), taxi via (route) (holding instructions as necessary). Runway (designator) at (taxiway) intersection departure, (feet available) feet available.</p>
                            <p><strong>Please coordinate with Local Control before issuing intersection taxi clearance. </strong></p>
                            <p>JAX_GND "Jacksonville Tower, Jacksonville Ground.</p>
                            <p>JAX_TWR "Jacksonville Tower, go ahead.</p>
                            <p>JAX_GND "King Air N517CC requests intersection Departure for RW 8 at Juliet"</p>
                            <p>JAX_TWR "N517CC RW 8 Intersection Juliet approved. HS"</p>
                            <p>JAX_GND "CO"</p>
                            <p>Example: N517CC is a B350 King Air and is parked at the GA Ramp off taxiway Golf. It is 97 degrees outside and his AC is not operating well. Runway 8 is active. He is requesting an intersection departure at Taxiway Juliet. He states that he has ATIS Bravo. "<em>N517CC, Runway 8, <strong>intersection</strong> Juliet, Taxi via Golf, Alpha, approximately 8000 feet remaining."</em></p>
                            <p> </p>
                            <p><img src="http://www.healthcentraled.com/images/KJAXdiagram.png" alt="" width="50%" /></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Initiating an Intersection Departure</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Both a Pilot, and Air Traffic Control, can initiate an intersection departure. If ATC were to solicit it, they would just issue the intersection departure taxi instructions.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
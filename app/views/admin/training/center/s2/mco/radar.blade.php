@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Orlando International Tower</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">What is a Radar Tower?</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>All ATCT's are VFR in its purest form, however some busier airports, mainly class B airports, have Tower Display Workstations. This is essentially a television screen utilised by air traffic control to ensure separation of arriving, and sometimes departing aircraft, and also allows for VFR transitions which will be covered in a further chapter.</p>
                            <p>The only ZJX airport to use a radar facility is Orlando International (KMCO). This is due to the number of parallel runways, and number of consecutive arrivals and departures by the hour.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Side Step Procedures</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Side step procedures are used in multiple scenarios. Traffic could be late to vacate or depart a runway, a pilot may request it, or for runway conditions.</p>
                            <p>Example: (Southwest 213 is on final approach for 17R and previous traffic is yet to vacate)</p>
                            <p><em>Southwest 213, side step runway 17L, wind calm, runway 17L cleared to land.</em></p>
                            <p>Restating the runway, even during single runway operations, is highly recommended to ensure the pilot catches the side step maneuver.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop

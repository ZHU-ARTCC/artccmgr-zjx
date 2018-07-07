@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Military Departures</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Wind Issuance</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>All Military ATCTs must issue wind on takeoff clearance regardless of if a tail wind component exists.<br /><br /> <strong>PHRASEOLOGY-</strong><br /><br /> <em>Runway (runway), wind (surface wind in direction and velocity). Cleared for takeoff.</em></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Change to Departure</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Inform all departing IFR military turboprop/turbojet aircraft (except transport and cargo types) to change to departure control frequency with takeoff clearance.<br /><br /> <strong>PHRASEOLOGY-</strong><br /><br /> <em>Change to departure.</em> <br /><br /> If you issue takeoff clearance and forget to issue the Change to departure phraseology, do not instruct a military turboprop/turbojet aircraft (except transport and cargo types) to change frequencies below 2,500 AGL. Issue "When able, contact departure."<br /><br /> Military Transport and Cargo type aircraft may be switched like standard departures.<br /><br /> Military VFR aircraft will receive the "Frequency change approved" phraseology once clear of conflict and airborne.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
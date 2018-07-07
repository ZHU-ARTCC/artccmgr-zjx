@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Ground Stops</h2>
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
                            <p>Ground stops are issued when airspace ahead is clogged, or where a controller feels a need to halt all movement on the ground. If a ground stop is in effect, no aircraft may be released for departure without approval of the originator of the ground stop.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">EDCT</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Expected Departure Clearance Times are used by Traffic Management Units at busy airports to keep aircraft flowing smoothly on a schedule. Aircraft are permitted to depart no earlier than 5 minutes prior to the EDCT, and no later than 5 minutes after. Controllers are to ensure that pilots are sequenced to ensure they make their EDCT where practical.<br /><br /> 1. If an aircraft has begun to taxi or requests taxi in a manner consistent with meeting the EDCT, the aircraft shall be released. Additional coordination is not required.<br /><br /> 2. If an aircraft requests taxi or clearance for departure inconsistent with meeting the EDCT window, ask the pilot to verify the EDCT.<br /> (a) If the pilot's EDCT is the same as the FAA EDCT, the aircraft is released consistent with the EDCT. <br /> (b) If the pilot's EDCT is not the same as the FAA EDCT, refer to Trust and Verify Note below. <br /><br /> 3. If an aircraft requests taxi too late to meet the EDCT, contact the ATCSCC through the appropriate TMU. <br /><br /> <strong>NOTE-</strong><br /> (Trust &amp; Verify) EDCTs are revised by Air Carriers and Traffic Management for changing conditions en route or at affected airport(s). Terminal controllers' use of aircraft reported EDCT for departure sequencing should be verified with the appropriate TMU prior to departure if this can be accomplished without the aircraft incurring delay beyond the EDCT reported by the aircraft. The preferred method for verification is the Flight Schedule Monitor (FSM). If the EDCT cannot be verified without incurring additional delay, the aircraft should be released based on the pilot reported EDCT. The aircraft operator is responsible for operating in a manner consistent to meet the EDCT.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
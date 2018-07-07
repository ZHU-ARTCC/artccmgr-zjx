@extends('layouts.master')

@section('title')
@parent
| Staff
@stop

@section('content')

<?php function rolepos($pos){
    return function($role) use ($pos) {
        return $role->name == $pos;
    };
} ?>

<div class="page-heading-two">
    <div class="container">
        <h2>Staff</h2>
    </div>
</div>

<div class="container">
    <div class="about-us-two">
        <div class="team-two">
            <div class="block-heading-two">
                <h3><span>Air Traffic Manager</span> - <a href="mailto:atm@zhuartcc.org"><i class="fa fa-envelope"></i></a></h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @forelse($Roles->filter(rolepos('ATM'))->first()->users as $atm)
                        <h4>{{{$atm->full_name}}}</h4>
                    @empty
                        <h4>VACANT</h4>
                    @endforelse
                    The Air Traffic Manager is responsible to the VATUSA Southern Region Director for the overall administration
                    of the ARTCC.  The ATM is responsible for appointing ARTCC staff members and delegation of authority.
                </div>
            </div>
        </div>

        <div class="team-two">
            <div class="block-heading-two">
                <h3><span>Deputy Air Traffic Manager</span> - <a href="mailto:datm@zhuartcc.org"><i class="fa fa-envelope"></i></a></h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @forelse($Roles->filter(rolepos('DATM'))->first()->users as $datm)
                        <h4>{{{$datm->full_name}}}</h4>
                    @empty
                        <h4>VACANT</h4>
                    @endforelse
                    The Deputy Air Traffic Manager reports to the Air Traffic Manager and acts as Air Traffic Manager
                    in their absence.  The Deputy Air Traffic Manager is jointly responsible for administration and accuracy
                    of the roster including visiting controllers.
                </div>
            </div>
        </div>

        <div class="team-two">
            <div class="block-heading-two">
                <h3><span>Training Administrator</span> - <a href="mailto:ta@zhuartcc.org"><i class="fa fa-envelope"></i></a></h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @forelse($Roles->filter(rolepos('TA'))->first()->users as $ta)
                        <h4>{{{$ta->full_name}}}</h4>
                    @empty
                        <h4>VACANT</h4>
                    @endforelse
                    The Training Administrator works with the Air Traffic Manager and Deputy Air Traffic Manager to build
                    training programs, establish training procedures and recommend instructors and mentors.  The
                    Training Administrator works with Instructors and Mentors to develop knowledge and mentors to help
                    develop teaching ability.
                </div>
            </div>
        </div>

        @if(count($Roles->filter(rolepos('ATA'))->first()->users))
        <div class="team-two">
            <div class="block-heading-two">
                <h3><span>Assistant Training Administrator</span> - <a href="mailto:ata@zhuartcc.org"><i class="fa fa-envelope"></i></a></h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @forelse($Roles->filter(rolepos('ATA'))->first()->users as $ata)
                        <h4>{{{$ata->full_name}}}</h4>
                    @empty
                        <h4>VACANT</h4>
                    @endforelse
                    The Assistant Training Administrator is appointed by the Training Administrator and approved by
                    the Air Traffic Manager.  The Assistant Training Administrator assists the Training Administrator in
                    development and execution of training programmes, selection of Instructors and Mentors and other tasks
                    as directed.
                </div>
            </div>
        </div>
        @endif

        <div class="team-two">
            <div class="block-heading-two">
                <h3><span>Events Coordinator</span> - <a href="mailto:ec@zhuartcc.org"><i class="fa fa-envelope"></i></a></h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @forelse($Roles->filter(rolepos('EC'))->first()->users as $ec)
                        <h4>{{{$ec->full_name}}}</h4>
                    @empty
                        <h4>VACANT</h4>
                    @endforelse
                    The Events Coordinator is responsible to the Deputy Air Traffic Manager for the coordination, planning,
                    dissemination and creation of events to neighboring facilities, virtual airlines, VATUSA and VATSIM.
                </div>
            </div>
        </div>

        @if(count($Roles->filter(rolepos('AEC'))->first()->users))
        <div class="team-two">
            <div class="block-heading-two">
                <h3><span>Assistant Events Coordinator</span> - <a href="mailto:aec@zhuartcc.org"><i class="fa fa-envelope"></i></a></h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @forelse($Roles->filter(rolepos('AEC'))->first()->users as $aec)
                        <h4>{{{$aec->full_name}}}</h4>
                    @empty
                        <h4>VACANT</h4>
                    @endforelse
                    The Assistant Events Coordinator is responsible to the Events Coordination for assistance in
                    coordination, planning, dissemination and creation of events to neighboring facilities, virtual airlines,
                    VATUSA and VATSIM and other tasking as directed.
                </div>
            </div>
        </div>
        @endif

        <div class="team-two">
            <div class="block-heading-two">
                <h3><span>Facility Engineer</span> - <a href="mailto:fe@zhuartcc.org"><i class="fa fa-envelope"></i></a></h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @forelse($Roles->filter(rolepos('FE'))->first()->users as $fe)
                        <h4>{{{$fe->full_name}}}</h4>
                    @empty
                        <h4>VACANT</h4>
                    @endforelse
                    The Facility Engineer is responsible to the Senior Staff for creation of sector files, radar client files,
                    training scenarios, Letters of Agreement, Memorandums of Understanding, Standard Operating Procedures
                    and other requests as directed and submission to the Air Traffic Manager for approval prior to dissemination.
                </div>
            </div>
        </div>
       
        @if(count($Roles->filter(rolepos('AFE'))->first()->users))
        <div class="team-two">
            <div class="block-heading-two">
                <h3><span>Assistant Facility Engineer</span> - <a href="mailto:afe@zhuartcc.org"><i class="fa fa-envelope"></i></a></h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @forelse($Roles->filter(rolepos('AFE'))->first()->users as $aec)
                        <h4>{{{$aec->full_name}}}</h4>
                    @empty
                        <h4>VACANT</h4>
                    @endforelse
                    The Assistant Facility Engineer is responsible to the Facility Engineer for assistance in
                    the creation of sector files, radar client files, training scenarios, Letters of Agreement,
                    Memorandums of Understanding, Standard Operating Procedures and other requests as directed.
                </div>
            </div>
        </div>
        @endif 

        <div class="team-two">
            <div class="block-heading-two">
                <h3><span>Webmaster</span> - <a href="mailto:wm@zhuartcc.org"><i class="fa fa-envelope"></i></a></h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @forelse($Roles->filter(rolepos('WM'))->first()->users as $wm)
                        <h4>{{{$wm->full_name}}}</h4>
                    @empty
                        <h4>VACANT</h4>
                    @endforelse
                    Responsible to the Air Traffic Manager for the operation and maintenance of all IT services including, but not limited to,
                    the Website, Teamspeak and Email services and any other tasking as directed.
                </div>
            </div>
        </div>

        @if(count($Roles->filter(rolepos('AWM'))->first()->users))
        <div class="team-two">
            <div class="block-heading-two">
                <h3><span>Assistant Webmaster</span> - <a href="mailto:awm@zhuartcc.org"><i class="fa fa-envelope"></i></a></h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @forelse($Roles->filter(rolepos('AWM'))->first()->users as $awm)
                        <h4>{{{$awm->full_name}}}</h4>
                    @empty
                        <h4>VACANT</h4>
                    @endforelse
                    The Assistant Webmaster is appointed by the Webmaster and approved by the Air Traffic Manager.  The Assistant Webmaster assists the Webmaster in
                    development and management of IT services.
                </div>
            </div>
        </div>
        @endif

        <div class="team-two">
            <div class="block-heading-two">
                <h3><span>Instructors</span> - <a href="mailto:instructors@zhuartcc.org"><i class="fa fa-envelope"></i></a></h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @forelse($Roles->filter(rolepos('INS'))->first()->users as $ins)
                        <h4>{{{$ins->full_name}}}</h4>
                    @empty
                        <h4>No ARTCC Instructors</h4>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="team-two">
            <div class="block-heading-two">
                <h3><span>Mentors</span> - <a href="mailto:mentors@zhuartcc.org"><i class="fa fa-envelope"></i></a></h3>
            </div>

            <div class="row">
                <div class="col-md-12">
                @forelse($Roles->filter(rolepos('MTR'))->first()->users as $mtr)
                        <h4>{{{$mtr->full_name}}}</h4>
                    @empty
                        <h4>No ARTCC Mentors</h4>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

@stop

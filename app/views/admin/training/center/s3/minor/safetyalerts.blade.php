@extends('admin.training.center.layouts.master')


@section('content')

    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Merging Target Procedures</h2>
        </header>

        <div class="row">
            <div class="col-sm-12">

                <section class="panel">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Merging Targets</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                           <ul>    <b>A merging target procedure consists of two things: a mandatory traffic call and vectors around the traffic if the pilot requests it.</b>
</ul>
                              <ul>  Except while aircraft are established on a holding pattern, you must apply merging target procedures to all aircraft at or above 10000ft or turbojet aircraft at any altitude.
                              </ul>
                           <ul>     Issue traffic information to those aircraft listed above whose targets appear likely to merge unless the aircraft are separated by more than the appropriate vertical separation minima.
                           </ul>
                               <ul>If the pilot requests, vector his/her aircraft to avoid merging with the target of previously issued traffic.
                                </ul>
                               <ul> <b>PHRASEOLOGY-</b>

                               <ul> <li style="color:mediumpurple;"> TRAFFIC, (clock azimuth) O'CLOCK, (distance) MILES, (direction), (type), (altitude).</li>

                                     <ul><b>Example-</b>
                                  <ul> <li style="color:mediumpurple;">  “Traffic four o'clock, five miles, westbound, Boeing 787, at one two thousand.”

                                   <li style="color:mediumpurple;"> “American five fifty three, fly heading two five zero, vector for traffic. Traffic three o'clock, one zero miles, same direction, Boeing 747 Heavy eastbound at flight level three eight zero.”



                            </div>
                        </div>
                    </div>
                </section>

                <section class="panel">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">{ TITLE }</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                { CONTENT IN HTML }
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>


@stop
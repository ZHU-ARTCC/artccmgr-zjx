@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Airfield Layout</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Airfield Layout</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Airfields are composed of several different elements. For VATSIM, it is only critical you know what Ramps/Aprons are, Taxiways, and Runways. We're going to cover Jacksonville International, and also illustrate who is responsible for the areas. </p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Airport Ramps</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Ramps, also known as Aprons, are locations where aircraft park. Aprons are bordered by Terminals at most commercial airports that service medium to super heavy commercial airliners. <br />In the below, the red-shaded areas are Ramps. These areas are <strong>NOT</strong> controlled by Ground and pilots are free to move on these areas without contacting ATC so long as they do not land on or depart from these areas. <br /><br /><img src="/assets/trainingcenter/images/KJAXramps.png" width="100%" /></p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Airport Taxiways</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>The taxiways at Jacksonville International are controlled by Jacksonville Ground. These are shaded in red in the below image. Movement onto or about these areas require approval from the appropriate Ground controller. <br /><br /><img src="/assets/trainingcenter/images/KJAXtaxiways.png" width="100%" /></p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Airport Runways</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>In the below picture, the red areas are known as runways. These are areas that planes and helicopters will land and depart. Usage of these require approval from the appropriate local (tower) controller. </p>
                            <p>Runways are numbered based on their basic heading divided by 10. For example, runway 8 has a magnetic heading of 77 degrees. Take the rounded 80 and divide by 10. <br /><br /><img src="/assets/trainingcenter/images/KJAXrunways.png" width="100%" /></p>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
</section>

@stop
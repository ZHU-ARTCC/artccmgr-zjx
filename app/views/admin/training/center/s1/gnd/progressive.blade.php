@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Progressive Taxi</h2>
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
                            <p>Sometimes pilots that are new to an airport, or pilots that are lost, will request progressive taxi instructions. It is your job as a ground controller to facilitate these requests to the extent necessary to ensure the pilot can get to their requested location. According to the FAAO JO 7110.65T, Paragraph 3-7-2:</p>
                            <div style="background-color: #cccccc; width: 100%; text-align: justify;">e. Issue progressive taxi/ground movement instructions when:<ol>
                            <li>The pilot/operator requests.</li>
                            <li>The specialist deems it necessary due to traffic or field conditions, e.g., construction or closed taxiways.</li>
                            <li>Necessary during reduced visibility, especially when the taxi route is not visible from the tower.</li>
                            </ol><br /><strong>NOTE-</strong><br />Progressive instructions may include step-by-step directions and/or directional turns.</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Step-by-Step Directions</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>The Step-by-Step Progressive taxi is one where you give the pilot a turn when they are approaching each taxiway. For example, if you are working ground at Jacksonville INTL&nbsp;and are taxiing an aircraft from the terminal to runway 8, you would tell an aircraft t<em>urn right next taxiway</em> when he approaches Juliet Taxiway. As he approaches Alpha, <em>Turn left&nbsp;next taxiway</em> and then as he approaches Lima,&nbsp;<em>Turn right&nbsp;next taxiway</em>.<br /><br /> This is best for newer pilots who are lost and don't have charts on board. This is also the preferred way if their scenery does not match the charts.</p>
                            <p><img src="http://www.healthcentraled.com/images/KJAXdiagram.png" alt="" width="50%" /></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Directional Turns</a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Another method of issuing progressive taxi instructions is the Directional Turns. This one is given integrated within the standard taxi instructions, and instead of just listing the taxiways you also list the directions to turn. For example:<br /><br /><em>Jet Blue&nbsp;162, Runway 8, taxi via right turn on Juliet, left&nbsp;turn on Alpha, right&nbsp;turn on Lima. Altimeter 2992. Wind 190 at 6. ATIS Information Delta is current.</em></p>
                            <p>Sometimes a combination of a directional turn can be used along with standard taxi instructions for insurance of clarity.&nbsp;</p>
                            <p><img src="http://www.healthcentraled.com/images/KJAXdiagram.png" alt="" width="50%" /></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Conclusion</a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>Progressive Taxi instructions, although longer than the standard taxi instructions, are good for helping lost or new pilots figure out their way around complex airports. While it may create more work for the ground controller in the short run, it cuts down on the work in the end as you won't have an aircraft going the wrong direction creating a deal on your taxiways.<br /><br /> <strong>Remember-- When giving progressive taxi instructions, remember to read them <u>slowly</u> so that the lost or newer pilot has a chance to understand them and won't try to interpret what you said or ask you to repeat yourself multiple times.</strong></p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
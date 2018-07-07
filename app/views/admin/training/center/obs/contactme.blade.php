@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Sending a "Contact Me"</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Sending a "Contact Me" Message</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>When aircraft have not recognozed that they are approaching or with the confines of your airspace, it is appropriate to issue a "Contact Me" to the aircraft to call your frequency. This should only be performed if they have "Entered your Airspace"</p>
                            <p>Here are some useful hints and suggestions.</p>
                            <p>Contact me messages are to be used as a last resort. If you are only by yourself please check your frequencies for the pilot both on voice and text first, before sending a "contactme". Under no circumstance should a "contactme" be sent out when there are other controllers online above or below you. The only time that is acceptable is when all controllers have determined that the pilot is not talking to anyone.</p>
                            <p>Here's a good rule to use when it is OK to send a contactme. (After you have tried all other methods)<br />In-bounds: CTR/APP, when the aircraft has entered your airspace. TWR, when the aircraft is with 5nm of the airport. GND, if the aircraft does not stop after exiting the runway. (when no ATC is online above you)<br />Out-bounds: CTR/APP/TWR/GND, if the aircraft enters a movement area and has not called for clearance when there is no DEL controller online. (If there is no ATC online below you)</p>
                            <p>The DEL position should NEVER send contactme's. I know it is a bummer when a pilot does not call for clearance and begins to taxi, but unfortunately clearance delivery is a non controlling position. Meaning once the aircraft leaves the ramp area, you have lost all jurisdiction. So if you are on any DEL position and a plane starts to taxi with out ever talking to you, there is sadly nothing you can do about that.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>

@stop
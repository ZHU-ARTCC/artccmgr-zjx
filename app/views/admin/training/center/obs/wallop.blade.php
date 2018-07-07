@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Contacting a VATSIM Supervisor</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">How to Contact a Supervisor</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>The VATSIM arena is a large network with many members that are interested in an enjoyable, pleasant, professional experience. There are many rules and regulations that govern the network. When both pilots and controllers encounter a problem with compliance to these rule and regulations, they are able to contact a group of trained VATSIM members known as supervisors. These members are online to help sort out and solve problems. </p>
                            <p>Common problems encountered include a pilot not responding to your request to contact them, vulgar language on frequency and hot microphones on frequency.</p>
                            <p>We are able to contact a supervisor through a command executed in the text box. </p>
                            <p>If you need a supervisor, type ".wallop"</p>
                            <p><strong>This should be followed by the callsign and a brief description of the problem</strong>.  </p>
                            <p>A request for assistance should, when possible, indicate enough information to allow the Supervisor to start to understand the issue and the urgency of the request.</p>
                            <p>Examples of good requests for assistance:<br />.wallop ABC123 in my airspace not contacting ATC, and not responding to multiple requests for contact. No immediate conflict.<br />.wallop ABC123 using rude and vulgar language on frequency<br />.wallop Need help with someone who has a hot mic<br />.wallop ABC123 not squawking Mode C and says he doesn't know how to</p>
                            <p>Examples of not-so-good requests for assistance<br />.wallop<br />.wallop Help<br />.wallop SUP<br />.wallop Hi</p>
                            <p>Once you have submitted the command, be patient and a Supervisor will open a text chat with you to finish solving the problem. Remember, they may be working on several problems at once. </p>
                            <p>The more info you can give, in many cases, the faster the Supervisor can start working the issue, just asking clarifying questions and providing feedback/resolution to the controller. Of course, there will be some "unique" situations where this may not help, but it's generally felt that amplified requests for assistance will help in 90% or more of the cases.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>

@stop
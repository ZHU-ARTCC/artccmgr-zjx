@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Runway Selection</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Choosing a Runway</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>The art of choosing active runways is one that takes a little practice to master, especially if you have runways that point in different directions and vary in size and length with a varying load of different types of aircraft departing and arriving.</p>
                            <p>Many airports prefer a certain flow for "calm winds" or winds less than 3 knots. In general begin considering adjusting the calm wind runway wind the wind is 5 knots or greater. Check the cheat sheet for calm wind operations.</p>
                            <p>Generally, you want your active runways to be pointing into the wind. So, if the wind is blowing from the east, your east runways would be active. If the wind is low, say, less than 10 knots or calm and a controlled airport in a very close vicinity is in a certain flow then it's always best to match their flow where practical to help the radar controllers.</p>
                            <p>Generally, SOPs will help define what runways to make active but remember that you, as the Local Controller make the final decisions on active runways.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
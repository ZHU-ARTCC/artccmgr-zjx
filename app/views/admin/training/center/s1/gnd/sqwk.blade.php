@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>XNPDR</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Check the Transponder</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>At the time of taxi, the aircraft should've input the correct transponder code. If the pilot input the wrong code, the data tag will show either the wrong four digit code flashing or the word "code" flashing. If you see either one of these two flashing in the data tag, you should have the pilot change the Beacon code. If the correct code is 3641, the proper phraseology would be "Delta 342, reset transponder, squawk 3641."</p>
                            <p>Once the code is been input correctly you should only see the groundspeed in the data tag. You should never be able to see the four digit Beacon code.</p>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
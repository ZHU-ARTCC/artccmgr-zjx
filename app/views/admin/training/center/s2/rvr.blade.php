@extends('admin.training.center.layouts.master')


@section('content')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Runway Visual Range</h2>
    </header>

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Runway Visual Range</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>The runway visual range (RVR) is an instrumentally derived value that represents the horizontal distance a pilot may see down the runway. It is the maximum distance at which the runway, or the specified lights or markers delineating it, can be seen from a position above a specified point on its center line. This value is normally determined by visibility sensors located alongside and higher than the center line of the runway.<br />RVR is calculated from visibility, ambient light level, and runway light intensity.<br /><br />Today most airports use Instrumented Runway Visual Range or IRVR, which is measured by devices called forward scatter meters which provide simplified installation as they are integrated units and can be installed as single unit(s) at a critical location along the runway. Some airports are still using  transmissometers which are installed at one side of a runway relatively close to its edge. Normally three transmissometers are provided, one at each end of the runway and one at the mid-point. In the US, Forward Scatter RVRs are replacing transmissometers at most airports.<br /><br />RVR is a critical component in determining what the ILS minimums will be for each landing Category. The lowest authorized ILS minimums, with all required ground and airborne systems components operative, are: (a) Category I Decision Height (DH) 200 feet and Runway Visual Range (RVR) 2,400 feet (with touchdown zone and centerline lighting, RVR 1,800 feet); (b) Category II DH 100 feet and RVR 1,200 feet; (c) Category IIIa No DH or DH below 100 feet and RVR not less than 700 feet; (d) Category IIIb No DH or DH below 50 feet and RVR less than 700 feet but not less than 150 feet; (e) Category IIIc No DH and no RVR limitation. Also, the RVR visibility readings assist Airport Traffic Control Tower (ATCT) controllers when issuing control instructions to avoid interfering operations within ILS critical areas at controlled airports.<br /><br />The location of the RVR visibility sensor should be within 500 feet of the runway centerline and within 1,000 feet of the designated runway threshold.<br /><br />RVR shall be reported whenever the prevailing visibility is 1 statute mile or less and/or the RVR for the designated instrument runway is 6,000 feet or less. RVR shall be reported in the body of the METAR. <br /><br />RVR is measured in increments of 100 feet up to 1,000 feet, increments of 200 feet from 1,000 feet to 3,000 feet, and increments of 500 feet above 3,000 feet to 6,000 feet.<br /><br />How do we interpret the METAR?<br /><br />The RVR code in the METAR follows the VISIBILITY code. <br /><strong>EXAMPLE:</strong> KABC 121755Z AUTO 21016G24KT 1SM R11/P6000FT -RA BR BKN015 0VC025 06/04 A2990 RMK.<br /><br />For RVR that is a constant reportable value, <br />The RVR shall be coded in the format, <strong>R</strong>[2 digit RW number][Runway Approach Direction]<strong>/</strong>[Constant reportable value in feet] <strong>FT</strong>   <br /><strong>EXAMPLE:</strong>    R01L/0800FT     " Runway one left  RVR eight hundred."<br /><br />RVRs based on a Transmissometer are not considered a constant reportable value and ten-minute extreme values (highest and lowest) of transmittance shall be reported. <br />The RVR shall be coded in the format <strong>R</strong>[2 digit RW number][Runway Approach Direction]<strong>/</strong>[Lowest reportable value in feet]V[Highest Reportable Value in feet] <strong>FT</strong>    <br /><strong>EXAMPLE:</strong>    R01L/0600V1000FT"Runway one left RVR variable six hundred to one thousand."<br /><br />Modifiers are used for<strong> less than</strong> (M) and <strong>greater than</strong> (P).  <br /><strong>EXAMPLE:</strong>   R27R/P6000FT    "Runway two seven left  RVR greater than six thousand."<br /><br />Local, Terminal and En Route controllers shall provide RVR information to the pilot at time of Take off Clearance and Landing Clearance. <br /><br /><strong>LOCAL CONTROL EXAMPLE 1:</strong> <br /><br />METAR - KMCO 110553Z 02008KT 1/2SM R35L/3500FT -RA OVC008 17/17 A2994 RMK<br /><br /> "United 46, you are following a 757 on a 2 mile final, caution wake turbulence, Runway three five left  RVR three thousand five-hundred, wind 020 at 8, runway three six right, cleared to land." <br /><br /><strong>LOCAL CONTROL EXAMPLE 2:</strong> <br /><br />METAR - KMCO 110553Z 02008KT 1/4SM R35L/1200V3500FT -RA OVC008 17/17 A2994 RMK<br /><br />" Southwest 2159, wind 020 at 8, runway three five left  RVR variable one thousand two-hundred to three thousand five-hundred, fly heading 030, runway three five left, cleared for take off."</p>
                            <p> </p>
                            <p><img src="http://healthcentraled.com/images/Transmissometer.jpg" alt="" width="50%"  /></p>
                            <p><strong>Transmissometer</strong></p>
                            <p> </p>
                            <p><img src="http://healthcentraled.com/images/New%20Generation%20RVR%20System.jpg" alt="" width="50%" /></p>
                            <p><strong>New Generation RVR System</strong></p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


@stop
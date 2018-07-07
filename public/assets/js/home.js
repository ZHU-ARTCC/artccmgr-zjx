var WeatherAirports = [
    'KMCO',
    'KJAX',
    'KPNS',
    'KDAB',
    'KCHS',
    'KFLO',
    'KMYR'
];

$(document).ready(function() {
/*
    jQuery('.r-slider .banner').revolution({
        delay:7000,
        startheight:200,
        startwidth:1000,
        startWithSlide:0,

        fullScreenAlignForce:"off",
        autoHeight:"off",

        shuffle:"off",

        onHoverStop:"on",

        thumbWidth:100,
        thumbHeight:50,
        thumbAmount:3,

        hideThumbsOnMobile:"on",
        hideNavDelayOnMobile:1500,
        hideBulletsOnMobile:"off",
        hideArrowsOnMobile:"off",
        hideThumbsUnderResoluition:0,

        hideThumbs:10,
        hideTimerBar:"on",

        keyboardNavigation:"on",

        navigationType:"bullet",
        navigationArrows:"solo",
        navigationStyle:"round",

        navigationHAlign:"center",
        navigationVAlign:"bottom",

        soloArrowLeftHalign:"left",
        soloArrowLeftValign:"center",
        soloArrowLeftHOffset:20,
        soloArrowLeftVOffset:0,

        soloArrowRightHalign:"right",
        soloArrowRightValign:"center",
        soloArrowRightHOffset:20,
        soloArrowRightVOffset:0,


        touchenabled:"on",
        swipe_velocity:"0.7",
        swipe_max_touches:"1",
        swipe_min_touches:"1",
        drag_block_vertical:"false",

        stopAtSlide:-1,
        stopAfterLoops:-1,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        hideSliderAtLimit:0,

        dottedOverlay:"none",

        spinned:"spinner4",

        fullWidth:"off",
        forceFullWidth:"off",
        fullScreen:"off",
        fullScreenOffsetContainer:"#topheader-to-offset"
    });
*/
    var images = [
        '/assets/images/slides/home/1.jpg',
        '/assets/images/slides/home/2.jpg',
        '/assets/images/slides/home/3.jpg',
        '/assets/images/slides/home/4.jpg',
    ];
    var i = 0;

    (function(){
        $(".rotating-banner").css('background-image', 'url(' + images[i] + ')');
        i = (i+1) % images.length;

        setInterval(function(){
            $(".rotating-banner").css('background-image', 'url(' + images[i] + ')');
            i = (i+1) % images.length;
        }, 7000);
    })();

});

function grabWeather()
{
    var thedata = null;
    var now = new Date;
    var hours, mins;

    $.getJSON("/Weather/Airport/" + WeatherAirports.join("/"), function(data)
    {
        $.each(data, function(key, value)
        {
            if (value.rules == null) { value.rules = "Unknown"; }
            if (value.wind == null) { value.wind = "Unknown"; }
            if (value.wind == "@") { value.wind = "Unknown"; }
            if (value.altimeter == null) { value.altimeter = "Unknown"; }

            thedata += "<tr><td>" + key + "</td><td class=\"wxrules" + value.rules + "\"><a href=\"#\" class=\"tooltips\" title=\"" + value.metar + "\">" + value.rules + "</a></td><td>" + value.wind + "</td><td>" + value.altimeter + "</td></tr>";
        });
        if (thedata == null) { thedata = "<tr><td colspan=\"4\">Weather information unavailable</td></tr>"; }
        if (now.getUTCHours().toString().length == 1) {
            hours = "0" + now.getUTCHours().toString();
        } else {
            hours = now.getUTCHours().toString();
        }
        if (now.getUTCMinutes().toString().length == 1) {
            mins = "0" + now.getUTCMinutes().toString();
        } else {
            mins = now.getUTCMinutes().toString();
        }
        $('#spanWeatherTime').html(hours + mins);
        $('#tableWeather').html(thedata);
        $('.tooltips').tooltipster();
    });
}

function grabControllers()
{
    var thedata = null;

    var now = new Date;
    var hours;
    var mins;

    $.getJSON("/ATC/Online", function(data)
    {
        $.each(data, function(key, value) {
            thedata += "<tr><td>" + value.position + "</td><td>" + value.frequency + "</td><td>" + value.controller + "</td></tr>";
        });
        if (thedata == null) {
            thedata = "<tr><td colspan=\"3\">No controllers currently online</td></tr>";
        }
        $('#tableControllers').html(thedata);
        if (now.getUTCHours().toString().length == 1) {
            hours = "0" + now.getUTCHours().toString();
        } else {
            hours = now.getUTCHours().toString();
        }
        if (now.getUTCMinutes().toString().length == 1) {
            mins = "0" + now.getUTCMinutes().toString();
        } else {
            mins = now.getUTCMinutes().toString();
        }
        $('#spanControllerTime').html(hours + mins);
    });
}
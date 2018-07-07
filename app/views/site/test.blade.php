@extends('layouts.master')

@section('title')
@parent
| Training
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Training - Test Training Checklist</h2>
    </div>
</div>

<div class="container">
	<script language="JavaScript">
<!--
if (document.images)
{
  preload_image_object = new Image();
  // set image url
  image_url = new Array();
  image_url[0] = "/assets/positions/images/terminal/P31.jpg";
  image_url[1] = "/assets/positions/images/terminal/VPS.jpg";
  image_url[2] = "/assets/positions/images/terminal/OZR.jpg";
  image_url[3] = "/assets/positions/images/terminal/PAM.jpg";
  image_url[4] = "/assets/positions/images/terminal/TLH.jpg";
  image_url[5] = "/assets/positions/images/terminal/VLD.jpg";
  image_url[6] = "/assets/positions/images/terminal/FLO.jpg";
  image_url[7] = "/assets/positions/images/terminal/CAE.jpg";
  image_url[8] = "/assets/positions/images/terminal/MYR.jpg";
  image_url[9] = "/assets/positions/images/terminal/CHS.jpg";
  image_url[10] = "/assets/positions/images/terminal/NBC.jpg";
  image_url[11] = "/assets/positions/images/terminal/SAV.jpg";
  image_url[12] = "/assets/positions/images/terminal/JAX.jpg";
  image_url[13] = "/assets/positions/images/terminal/DAB.jpg";
  image_url[14] = "/assets/positions/images/terminal/F11.jpg";
   var i = 0;
   for(i=0; i<=14; i++) 
 preload_image_object.src = image_url[i];
}

//-->
</script> 
<script type="text/javascript">
function mapsel_on(id)
{
	document.getElementById("overimg").src="/assets/positions/images/terminal/"+id+".jpg";
}
function mapsel_off()
{
	document.getElementById("overimg").src="/assets/positions/images/terminal/background.jpg";
}
function mapsel(id)
{
	var ajaxRequest;  // The variable that makes Ajax possible!

	var ajaxDisplay = document.getElementById('positiontable');
	ajaxDisplay.innerHTML = '<img src="/assets/positions/images/waitbig.gif"> Please wait... Loading information...';
	
	try{
	// Opera 8.0+, Firefox, Safari
	ajaxRequest = new XMLHttpRequest();
	} catch (e){
	// Internet Explorer Browsers
	try{
	ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
	try{
	ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (e){
	// Something went wrong
	alert("Your browser broke!");
	return false;
	}
	}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
	if(ajaxRequest.readyState == 4){
	var ajaxDisplay = document.getElementById('positiontable');
	ajaxDisplay.innerHTML = ajaxRequest.responseText;
	}
	}
	var queryString = "?fac=" + id;
	ajaxRequest.open("GET", "/assets/positions/position.php" + queryString, true);
	ajaxRequest.send(null); 
	//window.open("http://enroute.aircharts.org/charts/us/ENR_"+id+".pdf");
}
</script>
<center>
<img src="/images/terminal/background.jpg" id="overimg" style="width: 500px; height: 342px;" usemap="#terminalmap" border="0" />
<map name="terminalmap" id="terminalmap">
<area shape="poly" coords="24,168,16,170,10,200,57,203,56,173,61,162,30,152" alt="P31" onmouseover="mapsel_on('P31')" onmouseout="mapsel_off()" onclick="javascript:mapsel('e');" />
<area shape="poly" coords="61,162,71,150,88,157,92,172,86,226,55,225,56,173" alt="VPS" onmouseover="mapsel_on('VPS')" onmouseout="mapsel_off()" onclick="javascript:mapsel('o');" />
<area shape="poly" coords="71,150,88,157,92,172,124,175,138,160,133,124,107,115,78,120" alt="OZR" onmouseover="mapsel_on('OZR')" onmouseout="mapsel_off()" onclick="javascript:mapsel('n');" />
<area shape="poly" coords="92,172,86,226,125,240,147,215,146,207,124,176" alt="PAM" onmouseover="mapsel_on('PAM')" onmouseout="mapsel_off()" onclick="javascript:mapsel('m');" />
<area shape="poly" coords="147,215,146,207,124,176,138,160,163,159,170,178,177,183,184,184,184,201,166,219" alt="TLH" onmouseover="mapsel_on('TLH')" onmouseout="mapsel_off()" onclick="javascript:mapsel('g');" />
<area shape="poly" coords="163,159,170,178,177,183,184,184,220,189,222,160,209,143,184,142,180,153,169,159" alt="VLD" onmouseover="mapsel_on('VLD')" onmouseout="mapsel_off()" onclick="javascript:mapsel('l');" />
<area shape="poly" coords="273,59,264,38,269,27,313,10,331,24,332,45,339,50,332,69,307,72" alt="CAE" onmouseover="mapsel_on('CAE')" onmouseout="mapsel_off()" onclick="javascript:mapsel('i');" />
<area shape="poly" coords="313,10,331,24,332,45,339,50,346,53,370,36,371,26,361,26,340,5,331,4" alt="FLO" onmouseover="mapsel_on('FLO')" onmouseout="mapsel_off()" onclick="javascript:mapsel('k');" />
<area shape="poly" coords="332,69,339,50,346,53,370,36,371,26,383,26,397,41,395,54,362,86,347,71" alt="MYR" onmouseover="mapsel_on('MYR')" onmouseout="mapsel_off()" onclick="javascript:mapsel('j');" />
<area shape="poly" coords="362,86,347,71,332,69,307,72,297,90,310,92,310,104,320,110,338,101" alt="CHS" onmouseover="mapsel_on('CHS')" onmouseout="mapsel_off()" onclick="javascript:mapsel('d');" />
<area shape="poly" coords="297,90,310,92,310,104,320,110,308,131,302,123,302,117,294,117,288,100" alt="NBC" onmouseover="mapsel_on('NBC')" onmouseout="mapsel_off()" onclick="javascript:mapsel('p');" />
<area shape="poly" coords="308,131,302,123,302,117,294,117,288,100,272,100,249,125,256,145,293,154" alt="SAV" onmouseover="mapsel_on('SAV')" onmouseout="mapsel_off()" onclick="javascript:mapsel('h');" />
<area shape="poly" coords="238,171,264,173,284,192,280,224,259,225,258,261,251,261,236,276,211,270,207,222,231,212,230,182" alt="JAX" onmouseover="mapsel_on('JAX')" onmouseout="mapsel_off()" onclick="javascript:mapsel('c');" />
<area shape="poly" coords="280,224,259,225,258,261,296,267" alt="DAB" onmouseover="mapsel_on('DAB')" onmouseout="mapsel_off()" onclick="javascript:mapsel('f');" />
<area shape="poly" coords="258,261,251,261,236,276,243,308,302,313,307,307,309,266,296,267" alt="MCO" onmouseover="mapsel_on('F11')" onmouseout="mapsel_off()" onclick="javascript:mapsel('b');" />
<area shape="rect" coords="327,305,495,335" alt="ENR" onclick="javascript:mapsel('a');" />
</map>
<div id="positiontable">&nbsp;</div>
</center>
</div>

@stop
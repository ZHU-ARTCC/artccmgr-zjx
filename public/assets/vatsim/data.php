<?php

echo "<table class=\"table table-bordered text-center\">";
echo "<thead>
	                        <tr>
	                            <th width=\"20%\"><center>Position</center></th>
	                            <th width=\"20%\"><center>Frequency</center></th>
	                            <th width=\"60%\"><center>Controller</center></th>
	                        </tr>
	                    </thead>";

// error handler function
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
   switch ($errno) {
    case E_USER_ERROR:
        echo "<b>My ERROR</b> [$errno] $errstr<br />\\n";
        echo "  Fatal error on line $errline in file $errfile";
        echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\\n";
        echo "Aborting...<br />\\n";
        exit(1);
        break;
 
    case E_USER_WARNING:
        echo "<b>My WARNING</b> [$errno] $errstr<br />\\n";
        break;
 
    case E_USER_NOTICE:
        echo "<b>My NOTICE</b> [$errno] $errstr<br />\\n";
        break;
 
    default:
        //echo \"Unknown error type: [$errno] $errstr $errline in $errfile<br />\\n\";
        break;
    }
 
    // Don"t execute PHP internal error handler 
    return true;
}
 
$old_error_handler = set_error_handler("myErrorHandler");

$row_count = 0; 
$color1 = "#F5F5F5"; 
$color2 = "#FFFFFF"; 

if(file_exists("/home/zjxlaravel/public/assets/vatsim/vatsim-data.txt"))
{
	$fp = fopen("/home/zjxlaravel/public/assets/vatsim/vatsim-data.txt", "r");

	while (!feof($fp))
	{
		$line = fgets($fp, 999);

		if(preg_match("~(ZHU|HOU|IAH|HOU|BPT|CLL|CXO|DWH|EFD|GLS|SGR|MSY|HUM|NEW|NBG|AUS|GTU|BTU|HYI|BTR|CRP|NGP|HRL|BRO|MFE|DRT|DLF|GPT|BOX|HSA|LCH|CWF|LFT|ARA|MOB|BFM|PQL|NQI|NOG|POE|AEX|SAT|RND|SKF|BAZ|SSF|LRD|VCT)_[A-Z0-9]*_*(DEL|GND|TWR|APP|DEP|CTR|FSS)~", $line, $match))
		{
                  	list($position, $cid, $name, $clienttype, $frequency, $latitude, $longitude, $altitude, $groundspeed, $planned_aircraft, $planned_tascruise, $planned_depairport, $planned_altitude, $planned_destairport, $server, $protrevision, $rating, $transponder, $facilitytype, $visualrange, $planned_revision, $planned_flighttype, $planned_deptime, $planned_actdeptime, $planned_hrsenroute, $planned_minenroute, $planned_hrsfuel, $planned_minfuel, $planned_altairport, $planned_remarks, $planned_route, $planned_depairport_lat, $planned_depairport_lon, $planned_destairport_lat, $planned_destairport_lon, $atis_message, $time_last_atis_received, $time_logon, $heading) = split(":", $line);
			if($rating == 1) { $rating = "OBS"; }
			if($rating == 2) { $rating = "S1"; }
			if($rating == 3) { $rating = "S2"; }
			if($rating == 4) { $rating = "S3"; }
			if($rating == 5) { $rating = "C1"; }
			if($rating == 6) { $rating = "C2"; }
			if($rating == 7) { $rating = "C3"; }
			if($rating == 8) { $rating = "I1"; }
			if($rating == 9) { $rating = "I2"; }
			if($rating == 10) { $rating = "I3"; }
			if($rating == 11) { $rating = "SUP"; }
			if($rating == 12) { $rating = "ADM"; }
			$rowcolor = ($row_count % 2) ? $color1 : $color2;
			//echo $position . " / " . $name . " (" . $rating . ") " . " / " . $frequency . "<br>";
			
			echo "<tbody>";
			echo "<tr>";
			echo "<td align=\"center\" >" . $position . "</td>";
			echo "<td align=\"center\" >" . $frequency . "</td>";
			echo "<td align=\"center\">" . $name . " (" . $rating . ") " . "</td>";
			echo "</tr>";
			echo "</tbody>";

			$row_count++;
		}
	}
}
if($row_count == 0){
	echo "<tr><td align=\"center\" colspan=\"3\"><img src=\"assets/vatsim/spinner_radar.gif\"> There are no controllers online!</td></tr>";
}
else if($row_count == 1){
	echo "<tr><td align=\"center\" colspan=\"3\"><img src=\"assets/vatsim/spinner_radar.gif\"> Currently 1 vZHU Controller Online!</td></tr>";
}
else{
	echo "<tr><td align=\"center\" colspan=\"3\"><img src=\"assets/vatsim/spinner_radar.gif\"> Currently $row_count vZHU Controllers Online!</td></tr>";
}
echo "<tr>";
echo "<td colspan=\"4\" class=\"text-right\">Last Updated "; 
echo date('H:i');
echo "z</td>";
echo "</tr>";
echo "</table>";

?>

<?php
$servername = "localhost";
$username = "mbozwood";
$password = "Matt123*";
$dbname = "zjxartcc_laravel";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM `comms` WHERE `facility`='".$_REQUEST['fac']."' ORDER BY type DESC, name";
$res = $conn->query($sql);
?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th width="10%">Identifier</th>
			<th width="10%">Relief</th>
			<th width="25%">Name</th>
			<th width="15%">Frequency</th>
			<th width="20%">Facility</th>
			<th width="10%">POF Ident</th>
			<th width="10%">ASSR Range</th>
		</tr>
	</thead>
	<tbody>
	<?php
		while ($row = mysql_fetch_assoc($res))
		{
			if ($lasttype != $row['type']) {
				echo '<tr><td colspan="7" class="freqshade">';
				switch ($row['type']) {
					case 1: echo "ATCT"; break;
					case 2: echo "Radar"; break;
					case 3: echo "Low En-Route Sectors"; break;
					case 4: echo "High En-Route Sectors"; break;
					default: echo "Unknown"; break;
				}
				echo '</td></tr>';
			}
			$lasttype = $row['type'];
			echo '<tr><td>'.$row['position'].'</td><td>'.$row['relief'].'</td><td>'.$row['name'].'</td><td>'.$row['frequency'].'</td><td>'.$row['facility'].'</td><td>'.$row['pofid'].'</td><td>'.$row['sqstart'].' - '.$row['sqend'].'</td></tr>';
		}
	?>
	</tbody>
</table>
<?php
}
?>

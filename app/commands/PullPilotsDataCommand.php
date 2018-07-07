<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class PullPilotsDataCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'vatsim:pilots';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Pulls down vatsim pilot data for airports within the vZHU ARTCC airspace.';

	protected $statusUrl = "http://status.vatsim.net/status.txt";

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$statsData = $this->getStatsData();
		$lastUpdated = null;
		$status = null;

		// TODO: Truncate online controllers table
		DB::table('pilots_online')->truncate();

		$client_section = false;
		$i = 0;
		foreach ($statsData as $line)
		{
			$line = trim($line);

			if (strpos($line, ";") === 0)
				continue;

			if (!$client_section && strpos($line, "UPDATE") === 0)
			{
				list($command, $time) = explode("=", $line);
				$time = trim($time);
				$time = preg_replace("/^(\d{4})(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})$/", "$1-$2-$3 $4:$5:$6", $time);
				$lastUpdated = strtotime($time);
			}

			if ($client_section && $line == "!SERVERS:")
				$client_section = false;

			if ($client_section)
			{
				list($callsign, $cid, $name, $clienttype, $frequency, $latitude, $longitude, $altitude, $groundspeed, $planned_aircraft, $planned_tascruise, $planned_depairport, $planned_altitude, $planned_destairport, $server, $protrevision, $rating, $transponder, $facilitytype, $visualrange, $planned_revision, $planned_flighttype, $planned_deptime, $planned_actdeptime, $planned_hrsenroute, $planned_minenroute, $planned_hrsfuel, $planned_minfuel, $planned_altairport, $planned_remarks, $planned_route, $planned_depairport_lat, $planned_depairport_lon, $planned_destairport_lat, $planned_destairport_lon, $atis_message, $time_last_atis_received, $time_logon, $heading, $QNH_iHg, $QNH_Mb) = explode(":", $line);

				$is_pilot = $clienttype == "PILOT";
				if (!$is_pilot) continue;
				
				$status = "Coming Soon";

				if ($is_pilot) {
					Pilot::create([
						'callsign' => $callsign,
						'cid' => $cid,
						'real_name' => $name,
						'ground_speed' => $groundspeed,
						'real_alt' => $altitude,
						'aircraft_type' => $planned_aircraft,
						'planned_cruise' => $planned_altitude,
						'dep_apt' => $planned_depairport,
						'arr_apt' => $planned_destairport,
						'status' => $status,
					]);
					$i++;
				}
			}

			if ($line != "!CLIENTS:")
				continue;
			else
				$client_section = true;
		}
		//$this->info("Saved pilot information for $i pilots");
		//Log::info("Saved pilot information for $i pilots");
	}

	protected function getStatsData()
	{
		$statusData = file_get_contents($this->statusUrl);
		$n = preg_match_all("/^url0=(.*)$/m", $statusData, $matches);
		$urls = $matches[1];
		shuffle($urls);
		$data = false;

		foreach($urls as $url) {
			$data_file = file(trim($url));

			foreach ($data_file as $record) {
				if (substr($record, 0, 9) == 'UPDATE = ') {
					$streamupdate = rtrim(substr($record, 9));
					$update_time = gmmktime(
						substr($streamupdate,8,2),
						substr($streamupdate,10,2),
						substr($streamupdate,12,2),
						substr($streamupdate,4,2),
						substr($streamupdate,6,2),
						substr($streamupdate,0,4)
					);
					break;
				}
			}

			$age = time() - $update_time;
			if ($age < 600) {
				$data = $data_file;
				break;
			}
		}

		if (!$data) {
			throw \Exception("No data source found that is younger than 10 minutes old.");
		}

		return $data;
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [];
	}

}

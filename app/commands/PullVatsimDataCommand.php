<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Carbon\Carbon;

class PullVatsimDataCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'vatsim:atc';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Pulls down vatsim data for showing current controllers and log controller time.';

	protected $statusUrl = "http://status.vatsim.net/status.txt";

	protected $facilities = [
		'ZHU','HOU','IAH','BPT','CLL','CXO','DWH','EFD','GLS','SGR','MSY','HUM','NEW','NBG','AUS','GTU','BTU','HYI','BTR','CRP','NGP',
		'HRL','BRO','MFE','DRT','DLF','GPT','BOX','HSA','LCH','CWF','LFT','ARA','MOB','BFM','PQL','NQI','NOG','POE','AEX','SAT','RND',
		'SKF','BAZ','SSF','LRD','VCT',
	];

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

		// TODO: Truncate online controllers table
		DB::table('atc_online')->truncate();

		$client_section = false;
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
				list($position, $cid, $name, $clienttype, $frequency, $latitude, $longitude, $altitude, $groundspeed, $planned_aircraft, $planned_tascruise, $planned_depairport, $planned_altitude, $planned_destairport, $server, $protrevision, $rating, $transponder, $facilitytype, $visualrange, $planned_revision, $planned_flighttype, $planned_deptime, $planned_actdeptime, $planned_hrsenroute, $planned_minenroute, $planned_hrsfuel, $planned_minfuel, $planned_altairport, $planned_remarks, $planned_route, $planned_depairport_lat, $planned_depairport_lon, $planned_destairport_lat, $planned_destairport_lon, $atis_message, $time_last_atis_received, $time_logon, $heading) = explode(":", $line);

				$is_controller = $clienttype == "ATC" && strpos($position, "OBS") === false && $rating != '1' && $facilitytype != '0' && strpos($position, "SAVF") === false && strpos($position, "SAVC") === false;
				if (!$is_controller) continue;

				foreach ($this->facilities as $facility)
				{
					$is_controller = strpos($position, $facility) === 0;
					if ($is_controller) break;
				}
				

				if ($is_controller) {
					// Found an ATC user
					$time_logon = strtotime(preg_replace("/^(\d{4})(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})$/", "$1-$2-$3 $4:$5:$6", $time_logon));
					$duration = time() - $time_logon;

					ATC::create([
						'atc' => $position,
						'freq' => $frequency,
						'name' => $name,
						'cid' => $cid,
						'rango' => $rating,
						'atis' => 'no atis available',
						'starttime' => $time_logon,
					]);


					// Is this neccessary? It detects if the streamupdate of the last record for the user matches this one
					// Shouldn't bog anything down unless we are running this too often
					$MostRecentLog = ControllerLog::where('cid', $cid)->orderBy('start', 'desc')->first();
					if ($MostRecentLog && $MostRecentLog->streamupdate == $lastUpdated)
						continue;

					if (!$MostRecentLog || $MostRecentLog->start != $time_logon)
					{
						ControllerLog::create([
							'cid' => $cid, 
							'name' => $name,
							'position' => $position,
							'duration' => $duration,
							'date' => date('n/j/y'),
							'start' => $time_logon,
							'streamupdate' => $lastUpdated,
						]);
					}
					else
					{
						$MostRecentLog->duration = $duration;
						$MostRecentLog->streamupdate = $lastUpdated;
						$MostRecentLog->save();
					}
				}
			}

			if ($line != "!CLIENTS:")
				continue;
			else
				$client_section = true;
		}
		$time = Carbon::now('Etc/UTC')->format('H:i').'Z';
		$setting = Settings::where('key', 'ATCUPDATE')->first();
		$setting->value = $time;
		$setting->save();
		//Log::info("Saved ATC Information at $time");
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

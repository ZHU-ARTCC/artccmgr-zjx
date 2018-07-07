<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Carbon\Carbon;

class ImportTrainingNotes extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'import:trainingnotes';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Import Training Notes from JSON file scraped from AWTS';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	public function fire()
	{
		$notes = json_decode(file_get_contents($this->argument('input_file')), true);

		$this->info('Read ' . count($notes) . ' into memory for importing');

		foreach($notes as $note) {
			$session_date = new Carbon($note['date']);
			$type = $this->convertType($note['type']);
			$position = $this->convertPosition($note['position']);
			$instructor = $this->findInstructor($note['instructor']);

			$session_date->second = 0;
			$session_date->minute = round($session_date->minute / 15) * 15;

			TrainingNote::create([
				'controller_id' => $note['cid'],
				'instructor_id' => $instructor,
				'position' => $position,
				'duration' => intval($note['duration']),
				'type' => $type,
				'comments' => trim(nl2br($note['notes'])),
				'date' => $session_date,
				'session_begin' => $session_date,
			]);
		}

		$this->info('Created ' . count($notes) . ' training notes from file');
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			['input_file', InputArgument::REQUIRED, 'The input JSON file'],
		];
	}

	protected function getOptions()
	{
		return [];
	}

	protected function convertType($type_str) {
		switch ($type_str) {
			case 'Lecture':
				return 1;
			case 'Live Network':
				return 2;
			case 'Sweatbox':
				return 3;
			case 'OTS Sweatbox':
				return 4;
			case 'OTS Live Network':
				return 5;
		}

		return 0;
	}

	protected function convertPosition($position_name) {
		$id_add = 0;

		if (strpos($position_name, 'MCO') == 0) {
			$id_add = 1;
		}

		if (strpos($position_name, 'DEL') > 0) {
			return $id_add + 1;
		} elseif (strpos($position_name, 'GND') > 0) {
			return $id_add + 3;
		} elseif (strpos($position_name, 'TWR') > 0) {
			return $id_add + 5;
		} elseif (strpos($position_name, 'APP') > 0) {
			return $id_add + 7;
		} elseif (strpos($position_name, 'CTR') > 0) {
			return 9;
		}
	}

	protected function findInstructor($instructor_name) {
		$User = User::whereRaw("CONCAT(first_name, ' ', last_name) LIKE ?", [$instructor_name])->first();

		if (!$User){
			throw Exception("Couldn't find an instructor with name " . $instructor_name);
		} 

		return $User->id;
	}

}

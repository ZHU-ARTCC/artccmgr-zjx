<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Carbon\Carbon;
use GuzzleHttp\Client;

class RatingFix extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'zjx:ratings';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Update Ratings From CERT';

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
		$users = User::all();
		foreach($users as $u)
		{
			$member = User::find($u->id);
			$cid = $u->id;
			$client = new GuzzleHttp\Client();
			$url = sprintf(Config::get('services.vatsim.url'), $cid);
			$result = $client->get($url);
			$xml = new SimpleXMLElement($result->getBody());

			$res = [
				'cid' => $xml->user['cid']->__toString(),
			];

			foreach ($xml->user->children() as $child) {
				$res[$child->getName()] = $child->__toString();
			}

			foreach (User::$RatingLong as $id => $long) {
				if (strtolower($res['rating']) == strtolower($long)) {
					$member->rating_id = $id;
				}
			}
			$member->save();
		}
	}

}

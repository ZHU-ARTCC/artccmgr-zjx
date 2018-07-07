<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Carbon\Carbon;
use GuzzleHttp\Client;

class ForumMemberAdd extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'zjx:forum';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Checks all roster members are in forum database';

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
		$i = 0;
		foreach($users as $u)
		{
			$current = SMFMember::where('member_name', $u->id)->first();
			if($current)
			{
				continue;
			}
			else
			{
				$new = new SMFMember;
				$new->member_name = $u->id;
				$new->date_registered = time();
				$new->email_address = $u->email;
				$new->passwd = uniqid();
				if($u->visitor == 1) {
					$new->id_group = 21;
				} else {
					$new->id_group = 20;
				}
				$new->is_activated = 1;
				$new->id_theme = 3;
				$new->password_salt = substr(md5(mt_rand()), 0, 4);
				$new->member_ip = '127.0.0.1';
				$new->member_ip2 = '127.0.0.1';
				$new->validation_code = '';
				$new->real_name = $u->full_name;
				$new->save();


				$full_name = SMFSettings::find('latestRealName');
				$full_name->value = $u->full_name;
				$full_name->save();

				$new2 = SMFMember::where('member_name', $u->id)->first();
				$memberId = SMFSettings::find('latestMember');
				$memberId->value = $new2->id_member;
				$memberId->save();
				$i++;
			}
		}
		echo "Saved {$i} Forum Members \n";
	}

}

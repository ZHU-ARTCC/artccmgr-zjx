<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Carbon\Carbon;
use GuzzleHttp\Client;

class GetRoster extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'zhu:roster';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ARTCC Roster';

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
	$client = new Client(['base_uri' => 'https://api.vatusa.net/KahamYRlHgyOW0Fd/']);
	$res = $client->request('GET', 'roster');
	if($res->getStatusCode() == "200") {
		$roster = json_decode($res->getBody());
	} else {
		exit(1);
	}

        foreach($roster->facility->roster as $member) {
            $currentUser = User::where('id', $member->cid)->first();
            if(!$currentUser) {
                $user = new User;
                $user->id = $member->cid;
                $user->first_name = $member->fname;
                $user->last_name = $member->lname;
                $user->email = $member->email;
                $user->rating_id = $member->rating;
                $user->canTrain = 1;
                $user->visitor = 0;
                $user->status = 0;
                $user->loa = 0;
                $user->del = 0;
                $user->gnd = 0;
                $user->twr = 0;
                $user->app = 0;
                $user->ctr = 0;
                $user->save();
            }
        }

    }

}

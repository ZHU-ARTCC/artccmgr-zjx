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
#        $roster = json_decode('{"status":"ok","facility":{"staff":{"atm":[],"datm":[{"cid":1371395,"name":"Meg Bruck","email":"megbruck@gmail.com","rating":4}],"ta":[{"cid":1164695,"name":"Lucas Kakert","email":"mayhemxf@gmail.com","rating":10}],"ec":[{"cid":1021169,"name":"Eric Bolt","email":"boltrontd@gmail.com","rating":7}],"fe":[{"cid":1327883,"name":"Donovan Patrick","email":"d.patrick@atlantacenter.net","rating":5}],"wm":[]},"roster":[{"cid":1296372,"fname":"Philip","lname":"Harris","email":"pilotphilip@gmail.com","join_date":"2017-06-23T04:24:07+00:00","promotion_eligible":0,"rating":11,"rating_short":"SUP"},{"cid":1145055,"fname":"Daniel","lname":"Wilbanks","email":"danielwilbanks@comcast.net","join_date":"2018-02-24T20:07:06+00:00","promotion_eligible":0,"rating":11,"rating_short":"SUP"},{"cid":1164695,"fname":"Lucas","lname":"Kakert","email":"mayhemxf@gmail.com","join_date":"2017-04-01T23:38:38+00:00","promotion_eligible":0,"rating":10,"rating_short":"I3"},{"cid":997868,"fname":"Michael","lname":"Bertolini","email":"bertolinimj@gmail.com","join_date":"2017-01-31T18:17:51+00:00","promotion_eligible":0,"rating":7,"rating_short":"C3"},{"cid":1021169,"fname":"Eric","lname":"Bolt","email":"boltrontd@gmail.com","join_date":"2018-01-28T12:56:27+00:00","promotion_eligible":0,"rating":7,"rating_short":"C3"},{"cid":858981,"fname":"Adam","lname":"Hulse","email":"adamhulse@taylormachineworks.com","join_date":"2017-07-17T14:03:00+00:00","promotion_eligible":0,"rating":7,"rating_short":"C3"},{"cid":1210226,"fname":"William","lname":"Anderson","email":"w.anderson@atlantacenter.net","join_date":"2016-12-27T06:46:49+00:00","promotion_eligible":0,"rating":5,"rating_short":"C1"},{"cid":1157478,"fname":"John","lname":"Croft","email":"atrcaptainjohn@yahoo.com","join_date":"2015-01-04T14:56:28+00:00","promotion_eligible":0,"rating":5,"rating_short":"C1"},{"cid":962947,"fname":"Josh","lname":"Harbison","email":"jrharbis@gmail.com","join_date":"2018-02-03T10:02:02+00:00","promotion_eligible":0,"rating":5,"rating_short":"C1"},{"cid":1332866,"fname":"Alexander","lname":"Iannuzzi","email":"aiannuzzi.vatsim@gmail.com","join_date":"2016-01-03T19:07:58+00:00","promotion_eligible":0,"rating":5,"rating_short":"C1"},{"cid":957392,"fname":"William","lname":"Lewis","email":"Williamlewis.mail@gmail.com","join_date":"2017-01-13T09:26:43+00:00","promotion_eligible":0,"rating":5,"rating_short":"C1"},{"cid":1327883,"fname":"Donovan","lname":"Patrick","email":"d.patrick@atlantacenter.net","join_date":"2015-09-22T13:28:53+00:00","promotion_eligible":0,"rating":5,"rating_short":"C1"},{"cid":1213828,"fname":"Tanner","lname":"Price","email":"tprice99@me.com","join_date":"2017-05-01T02:18:26+00:00","promotion_eligible":0,"rating":5,"rating_short":"C1"},{"cid":1111504,"fname":"Chris","lname":"Robison","email":"pilotandairport@gmail.com","join_date":"2018-02-04T08:05:57+00:00","promotion_eligible":0,"rating":5,"rating_short":"C1"},{"cid":1371395,"fname":"Meg","lname":"Bruck","email":"megbruck@gmail.com","join_date":"2016-10-12T15:30:49+00:00","promotion_eligible":1,"rating":4,"rating_short":"S3"},{"cid":1364926,"fname":"Ian","lname":"Cowan","email":"i.cowan@atlantacenter.net","join_date":"2016-12-18T05:31:49+00:00","promotion_eligible":0,"rating":4,"rating_short":"S3"},{"cid":1020995,"fname":"JOSEPH","lname":"PROBASCO","email":"dva4859@gmail.com","join_date":"2017-07-12T20:20:06+00:00","promotion_eligible":1,"rating":4,"rating_short":"S3"},{"cid":999370,"fname":"Michael","lname":"Sokolas","email":"coachsokolas@gmail.com","join_date":"2018-01-08T20:06:44+00:00","promotion_eligible":0,"rating":4,"rating_short":"S3"},{"cid":1385626,"fname":"Nik","lname":"Stackpole","email":"aviationheadquarters@gmail.com","join_date":"2018-01-17T21:32:09+00:00","promotion_eligible":0,"rating":4,"rating_short":"S3"},{"cid":1090147,"fname":"Michael","lname":"Thomas","email":"thomas1551@twc.com","join_date":"2017-08-21T22:01:52+00:00","promotion_eligible":1,"rating":4,"rating_short":"S3"},{"cid":1284793,"fname":"Zachary","lname":"Yarid","email":"zach.yarid@gmail.com","join_date":"2016-10-08T16:33:19+00:00","promotion_eligible":1,"rating":4,"rating_short":"S3"},{"cid":1382443,"fname":"Kristofer","lname":"Blevins","email":"klblevins22@gmail.com","join_date":"2018-02-03T10:02:08+00:00","promotion_eligible":0,"rating":3,"rating_short":"S2"},{"cid":1340261,"fname":"Aaron","lname":"Cannon","email":"cannonmichael-@outlook.com","join_date":"2017-03-19T01:37:06+00:00","promotion_eligible":0,"rating":3,"rating_short":"S2"},{"cid":1368044,"fname":"Peter","lname":"Djordjevic","email":"waregister1@gmail.com","join_date":"2018-01-31T17:11:54+00:00","promotion_eligible":0,"rating":3,"rating_short":"S2"},{"cid":1336490,"fname":"Nick","lname":"Gilbert","email":"jngilbert2001@yahoo.com","join_date":"2017-02-22T21:28:08+00:00","promotion_eligible":0,"rating":3,"rating_short":"S2"},{"cid":1001399,"fname":"Rahil","lname":"Jivani","email":"rahilda1@gmail.com","join_date":"2018-01-21T11:09:11+00:00","promotion_eligible":0,"rating":3,"rating_short":"S2"},{"cid":1209806,"fname":"Jonathan","lname":"Raines","email":"jonmkj1@gmail.com","join_date":"2017-09-16T19:02:30+00:00","promotion_eligible":0,"rating":3,"rating_short":"S2"},{"cid":1066049,"fname":"joshua","lname":"ramos","email":"josh.anna.ramos@gmail.com","join_date":"2018-01-30T17:37:31+00:00","promotion_eligible":1,"rating":3,"rating_short":"S2"},{"cid":1307591,"fname":"Aaron","lname":"Simpson","email":"absgreen92@gmail.com","join_date":"2018-02-20T19:33:34+00:00","promotion_eligible":0,"rating":3,"rating_short":"S2"},{"cid":1308953,"fname":"Derek","lname":"Troy","email":"derek.han112@gmail.com","join_date":"2017-03-22T10:27:02+00:00","promotion_eligible":0,"rating":3,"rating_short":"S2"},{"cid":1362850,"fname":"Jason","lname":"Almas","email":"jasoncalmas@gmail.com","join_date":"2017-12-02T10:57:10+00:00","promotion_eligible":0,"rating":2,"rating_short":"S1"},{"cid":1363076,"fname":"William","lname":"Costello","email":"williamcostellopro@gmail.com","join_date":"2017-07-07T02:04:27+00:00","promotion_eligible":0,"rating":2,"rating_short":"S1"},{"cid":1302669,"fname":"Dylan","lname":"Essex","email":"dylanessex13@gmail.com","join_date":"2018-02-12T13:17:40+00:00","promotion_eligible":0,"rating":2,"rating_short":"S1"},{"cid":1397540,"fname":"Conner","lname":"Hall","email":"connerhall7@yahoo.com","join_date":"2017-10-08T15:49:07+00:00","promotion_eligible":0,"rating":2,"rating_short":"S1"},{"cid":1278070,"fname":"Conner","lname":"Hopkins","email":"witeout@sbcglobal.net","join_date":"2018-01-09T16:55:09+00:00","promotion_eligible":0,"rating":2,"rating_short":"S1"},{"cid":1195827,"fname":"Brett","lname":"Lee","email":"jbrettlee@gmail.com","join_date":"2018-02-12T06:36:05+00:00","promotion_eligible":0,"rating":2,"rating_short":"S1"},{"cid":1396316,"fname":"Dallas","lname":"Manning","email":"StrangeWorldAutism@outlook.com","join_date":"2017-08-03T18:04:27+00:00","promotion_eligible":0,"rating":2,"rating_short":"S1"},{"cid":1385172,"fname":"Sam ","lname":"Morgan","email":"darthgummybearz@gmail.com","join_date":"2017-12-03T08:32:15+00:00","promotion_eligible":1,"rating":2,"rating_short":"S1"},{"cid":1262568,"fname":"Christian","lname":"Samuels","email":"chuckstonegear@gmail.com","join_date":"2017-12-23T13:53:27+00:00","promotion_eligible":0,"rating":2,"rating_short":"S1"},{"cid":1411479,"fname":"Michael","lname":"Shankles","email":"michaelindhs@gmail.com","join_date":"2017-12-31T21:31:24+00:00","promotion_eligible":0,"rating":2,"rating_short":"S1"},{"cid":1410555,"fname":"Alex","lname":"Westin","email":"alexwestin1231@gmail.com","join_date":"2018-01-10T21:32:53+00:00","promotion_eligible":0,"rating":2,"rating_short":"S1"},{"cid":1415443,"fname":"Rodney","lname":"Bootle","email":"abacorodney@gmail.com","join_date":"2018-01-20T23:14:55+00:00","promotion_eligible":1,"rating":1,"rating_short":"OBS"},{"cid":1342183,"fname":"Samuel","lname":"Clark","email":"samueljclark@xtra.co.nz","join_date":"2018-02-03T10:02:09+00:00","promotion_eligible":1,"rating":1,"rating_short":"OBS"},{"cid":1415349,"fname":"Jackson","lname":"Hodge","email":"jacksonhodge425@gmail.com","join_date":"2018-01-19T08:06:25+00:00","promotion_eligible":1,"rating":1,"rating_short":"OBS"},{"cid":1415361,"fname":"James","lname":"Nelson","email":"jbnelson06@gmail.com","join_date":"2018-01-19T08:33:17+00:00","promotion_eligible":1,"rating":1,"rating_short":"OBS"},{"cid":1393335,"fname":"luke","lname":"pendley","email":"l.pendley@outlook.com","join_date":"2018-02-23T19:48:31+00:00","promotion_eligible":1,"rating":1,"rating_short":"OBS"},{"cid":1328460,"fname":"Matt","lname":"Rekich","email":"mjrekich@gmail.com","join_date":"2018-01-21T12:38:30+00:00","promotion_eligible":1,"rating":1,"rating_short":"OBS"},{"cid":1415867,"fname":"Derek","lname":"Sennes","email":"chilling02@gmail.com","join_date":"2018-01-26T16:35:26+00:00","promotion_eligible":1,"rating":1,"rating_short":"OBS"},{"cid":1361374,"fname":"Etienne","lname":"Wasil","email":"Etiennegrey@gmail.com","join_date":"2018-01-02T06:19:01+00:00","promotion_eligible":1,"rating":1,"rating_short":"OBS"},{"cid":1411247,"fname":"Taylor","lname":"Williams","email":"tayman2012@yahoo.com","join_date":"2018-01-14T10:26:26+00:00","promotion_eligible":1,"rating":1,"rating_short":"OBS"}]}}');

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

<?php

use Carbon\Carbon;

class Events extends Eloquent {
	
	public static $HostLong = [
        'VATCAN' => 'VATCAN',
        'VATCAR' => 'VATCAR',
        'VATMEX' => 'VATMEX',
        'VATSIM' => 'VATSIM',
        'VATUSA' => 'VATUSA',
        'ZAB' => 'Albuquerque ARTCC',
        'ZAN' => 'Anchorage ARTCC', 
        'ZTL' => 'Atlanta ARTCC',
        'ZBW' => 'Boston ARTCC',
        'ZAU' => 'Chicago ARTCC',
        'ZOB' => 'Cleveland ARTCC',
        'ZDV' => 'Denver ARTCC',
        'ZFW' => 'Fort Worth ARTCC',
        'HCF' => 'Honolulu CF',
        'ZHU' => 'Houston ARTCC',
        'ZID' => 'Indianapolis ARTCC',
        'ZJX' => 'Jacksonville ARTCC',
        'ZKC' => 'Kansas City ARTCC',
        'ZLA' => 'Los Angeles ARTCC',
        'ZME' => 'Memphis ARTCC',
        'ZMA' => 'Miami ARTCC',
        'ZMP' => 'Minnieapolis ARTCC',
        'ZNY' => 'New York ARTCC',
        'ZOA' => 'Oakland ARTCC',
        'ZLC' => 'Salt Lake City ARTCC',
        'ZSE' => 'Seattle ARTCC',
        'ZDC' => 'Washington DC ARTCC',
    ];

    public static $DefaultPos = [
	'0' => 'None',
        '1' => 'Support',
        '2' => 'Enroute',
        '3' => 'I90',
	'4' => 'Austin',
	'5' => 'New Orleans',
	'6' => 'San Antonio',
    ];

	protected $table = 'event';

	protected $dates = ['created_at', 'updated_at', 'event_start', 'event_end'];
	protected $fillable = array('title', 'event_start', 'event_end', 'banner_link', 'description', 'host', 'status');


    public function positions() {
        return $this->hasMany('EventPosition', 'event_id');
    }

    public function getHostLongAttribute()
    {
        foreach (Events::$HostLong as $id => $long) {
            if ($this->host == $id) {
                return $long;
            }
        }

        return "";
    }

    public function getStatusLongAttribute()
    {
        switch($this->status)
        {
            case 0: return "Hidden";
            case 1: return "Active";

        }
    }

    public static function current()
    {
        return static::query()->where('status', '1')->where('event_end', '>', Carbon::now());
    }

    public function fillPositions()
    {
        //
    }
}

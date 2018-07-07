<?php

class ATC extends Eloquent {

	protected $table = 'atc_online';
	public $timestamps = false;
	protected $fillable = ['atc', 'freq', 'name', 'cid', 'rango', 'atis', 'starttime'];

	public function controller()
	{
		return $this->hasOne('User', 'id', 'cid');
	}

	public function newCollection(array $models = array())
	{
		return new ATCCollection($models);
	}

	public function duration()
	{
		$seconds_count = time() - $this->starttime;
		$delimiter  = ':';
		$seconds = $seconds_count % 60;
		$minutes = floor($seconds_count/60)%60;
		$hours   = floor($seconds_count/3600);

		$seconds = str_pad($seconds, 2, "0", STR_PAD_LEFT);
		$minutes = str_pad($minutes, 2, "0", STR_PAD_LEFT);
		$hours = str_pad($hours, 2, "0", STR_PAD_LEFT);

		return "$hours$delimiter$minutes$delimiter$seconds";
	}

	public static $RatingShort = [
        0 => 'N/A',
        1 => 'OBS', 2 => 'S1', 
        3 => 'S2', 4 => 'S3', 
        5 => 'C1', 7 => 'C3', 
        8 => 'I1', 10 => 'I3', 
        11 => 'SUP', 12 => 'ADM',
    ];

    public function getRatingShortAttribute()
    {
        foreach (ATC::$RatingShort as $id => $Short) {
            if ($this->rango == $id) {
                return $Short;
            }
        }

        return "";
    }
}

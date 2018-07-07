<?php

class Weather extends Eloquent {

	protected $table = 'weather';

	public $fillable = ['id', 'type', 'wind', 'baro', 'metar'];
	public $timestamps = false;


	public function getMcoDepartureRunwaysAttribute()
	{
		$wind_kts = $wind_dir = 0;

		if ($this->wind != 'Calm')
			list($wind_dir, $wind_kts) = explode("@", $this->wind);

		if (($wind_kts >= 10) && ($wind_dir >= 270 && $wind_dir <= 90))
			return '36L, 36R, 35L';
		elseif (($wind_kts < 10) || ($wind_kts >= 10 && ($wind_dir < 270 && $wind_dir > 90)))
			return '18L, 18R, 17R';
	}

	public function getMcoArrivalRunwaysAttribute()
	{
		$wind_kts = $wind_dir = 0;

		if ($this->wind != 'Calm')
			list($wind_dir, $wind_kts) = explode("@", $this->wind);

		if (($wind_kts >= 10) && ($wind_dir >= 270 && $wind_dir <= 90))
			return '36L, 36R, 35R';
		elseif (($wind_kts < 10) || ($wind_kts >= 10 && ($wind_dir < 270 && $wind_dir > 90)))
			return '18L, 18R, 17L';
	}
	public function getChsDepartureRunwaysAttribute()
	{
		$wind_kts = $wind_dir = 0;

		if ($this->wind != 'Calm')
			list($wind_dir, $wind_kts) = explode("@", $this->wind);

		if (($wind_kts >= 10) && ($wind_dir >= 240 && $wind_dir <= 60))
			return '33, 3';
		elseif (($wind_kts < 10) || ($wind_kts >= 10 && ($wind_dir < 240 && $wind_dir > 60)))
			return '15, 21';
	}
	
	public function getChsArrivalRunwaysAttribute()
	{
		$wind_kts = $wind_dir = 0;

		if ($this->wind != 'Calm')
			list($wind_dir, $wind_kts) = explode("@", $this->wind);

		if (($wind_kts >= 10) && ($wind_dir >= 240 && $wind_dir <= 60))
			return '33, 3';
		elseif (($wind_kts < 10) || ($wind_kts >= 10 && ($wind_dir < 240 && $wind_dir > 60)))
			return '15, 21';
	}
	public function getJaxDepartureRunwaysAttribute()
	{
		$wind_kts = $wind_dir = 0;

		if ($this->wind != 'Calm')
			list($wind_dir, $wind_kts) = explode("@", $this->wind);

		if (($wind_kts) >= 10 && ($wind_dir >= 170 && $wind_dir <= 350))
			return '26, 32';
		elseif (($wind_kts < 10) || ($wind_kts) >= 10 && ($wind_dir < 170 && $wind_dir > 350))
			return '8, 14';
	}
	
	public function getJaxArrivalRunwaysAttribute()
	{
		$wind_kts = $wind_dir = 0;

		if ($this->wind != 'Calm')
			list($wind_dir, $wind_kts) = explode("@", $this->wind);

		if (($wind_kts) >= 10 && ($wind_dir >= 170 && $wind_dir <= 350))
			return '26, 32';
		elseif (($wind_kts < 10) || ($wind_kts) >= 10 && ($wind_dir < 170 && $wind_dir > 350))
			return '8, 14';
	}
}


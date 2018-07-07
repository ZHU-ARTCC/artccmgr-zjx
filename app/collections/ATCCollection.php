<?php

class ATCCollection extends \Illuminate\Database\Eloquent\Collection
{

        public function getOceanic()
        {
                return $this->filter(function($c){
                        return preg_match('/^ZHU_(.*)_FSS$/', $c->atc);
                })->lists('atc');
        }

	public function getCenter()
	{
		return $this->filter(function($c){
			return preg_match('/^HOU_(.*)_CTR$/', $c->atc);
		})->lists('atc');
	}

	public function I90()
	{
		return $this->filter(function($c){
			return preg_match('/^HOU(_(.*))?_(APP|DEP)$/', $c->atc);
		})->lists('atc');
	}

	public function getIAH()
	{
		return $this->reduce(function($m, $c){
			if (preg_match_all('/^IAH(_(.*))?_(TWR|GND|DEL)$/', $c->atc, $matches)) {
				$m = array_merge($m, $matches[3]);
			}
			return array_unique($m);
		}, []);
	}

	public function getHOU()
	{
		return $this->reduce(function($m, $c){
			if (preg_match_all('/^HOU(_(.*))?_(APP|TWR|GND|DEL)$/', $c->atc, $matches)) {
				$m = array_merge($m, $matches[3]);
			}
			return array_unique($m);
		}, []);
	}

	public function getAUS()
	{
		return $this->reduce(function($m, $c){
			if (preg_match_all('/^AUS(_(.*))?_(APP|TWR|GND|DEL)$/', $c->atc, $matches)) {
				$m = array_merge($m, $matches[3]);
			}
			return array_unique($m);
		}, []);
	}

        public function getMSY()
        {
                return $this->reduce(function($m, $c){
                        if (preg_match_all('/^MSY(_(.*))?_(APP|TWR|GND|DEL)$/', $c->atc, $matches)) {
                                $m = array_merge($m, $matches[3]);
                        }
                        return array_unique($m);
                }, []);
        }
}

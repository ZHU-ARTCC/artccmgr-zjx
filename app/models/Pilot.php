<?php

class Pilot extends Eloquent {

	protected $table = 'pilots_online';
	public $timestamps = false;
	protected $fillable = ['callsign', 'cid', 'real_name', 'real_alt', 'ground_speed', 'aircraft_type', 'planned_cruise', 'dep_apt', 'arr_apt', 'status'];

}

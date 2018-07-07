<?php

class Scenery extends Eloquent {
	
	protected $table = 'scenery';

	protected $fillable = array('name', 'description', 'type', 'link');

}
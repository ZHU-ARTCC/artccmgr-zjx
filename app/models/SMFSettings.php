<?php

class SMFSettings extends Eloquent {

	protected $connection = 'zjxforum';
	protected $table = 'smf_settings';
	protected $primaryKey = 'variable';
	public $timestamps = false;
	
}

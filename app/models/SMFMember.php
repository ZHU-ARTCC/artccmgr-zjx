<?php

class SMFMember extends Eloquent {

	protected $connection = 'zjxforum';
	protected $table = 'smf_members';
	protected $primaryKey = 'member_name';
	public $timestamps = false;
	
}

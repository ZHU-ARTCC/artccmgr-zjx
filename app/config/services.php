<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => array(
		'domain' => '',
		'secret' => '',
	),

	'mandrill' => array(
		'secret' => '',
	),

	'stripe' => array(
		'model'  => 'User',
		'secret' => '',
	),

	'smf' => array(
		'path' => '/home/zhuartcc/zhuartcc.org/public/forum',
	),

	'vatsim' => [
		'url' => 'https://cert.vatsim.net/vatsimnet/idstatus.php?cid=%d'
	],

	'github' => [
		'secret' => '0b5fab63-f58f-42ed-9e10-e3f38f0e843d',
	],

	'uls' => [
		'url' => 'http://login.vatusa.net/uls/info?token=%d&format=xml'
	],

);

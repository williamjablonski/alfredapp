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
		//'secret' => 'VWm_74e-BFJ6QnTwhGlfDw', contato@lucianotonet.com
      	//'secret' => '53XFr9wwdDHZL9C8Hh_nKg',
      	'secret'   => 'ZNQ4y1IDRFmpkHLo_r5nJg'
	),

	'stripe' => array(
		'model'  => 'User',
		'secret' => '',
	),

);

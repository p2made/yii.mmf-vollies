<?php
return [
	'class' => \dektrium\user\Module::className(),
	'urlPrefix' => 'vollie',
	'modelMap' => [
		'User' => 'common\models\User',
		'Profile' => 'common\models\Profile',
	],
	'mailer' => [
		'sender' => [
			'no-reply@malenymusicfestival.com' => 'Maleny Music Festival Vollies'
		],
		'confirmationSubject'   => 'Please confirm your email',
		'reconfirmationSubject' => 'Please confirm your new email',
		'recoverySubject'	   => 'Recover your login',
	],
	'admins' => ['vollies', 'noel', 'joan', 'john', 'lisa', 'tom', 'pedro', 'nahum'],
];

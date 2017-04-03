<?php
return [
	'adminEmail' => 'admin@example.com',
	'supportEmail' => 'support@example.com',
	'user.passwordResetTokenExpire' => 3600,

	'p2m' => [
		'assets' => [
			'useStatic' => true, // false or not set to use published assets
			'staticEnd' => [
				'basePath' => '@assets',
				'baseUrl' => '@assetsUrl',
			],
		],
		'reverseDomain' => 'dev.yii.mmf', // customise for your host configuration
	],
];

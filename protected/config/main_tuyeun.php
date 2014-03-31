<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
// Define a path alias for the Bootstrap extension as it's used internally.
// In this example we assume that you unzipped the extension under protected/extensions.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
Yii::setPathOfAlias('ckeditor', dirname(__FILE__).'/../extensions/ckeditor');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'',

  'preload'=>array('log, ckeditor'),
 // 'sourceLanguage'=>'vi',
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
    'application.extensions.*',
    'ext.bootstrap.*',
		'ext.common.*',
		'ext.EchMultiSelect.*',
		'ext.ckeditor.*',
    'ext.yii-mail.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.2','127.0.0.1','::1'),
		),

	),
		
  'behaviors'  => array(
    'runEnd' => array(
      'class' => 'application.components.WebApplicationEndBehavior',
    ),
  ),
	// application components
	'components'=>array(
    'bootstrap'=>array(
      'class'=>'bootstrap.components.Bootstrap',
    ),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format

//		'urlManager'=>array(
//			'urlFormat'=>'path',
//			'rules'=>array(
//				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
//				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
//				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
//			),
//		),

		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database

		'db'=>array(
			/*'connectionString' => 'mysql:host=mysql-server02;dbname=tanbqvinhthang',
			'emulatePrepare' => true,
			'username' => 'tanbqvith',
			'password' => 'Vith2013',
			'charset' => 'utf8',*/
			'connectionString' => 'mysql:host=localhost;dbname=mydb',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
          'categories'=>'system.*',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
    'adminEmail'=>'thituyen24@gmail.com',
    'adminName' => 'Vaco System',
    'noreplyEmail' => 'tuyen.developer@gmail.com',
    'noreplyName' => 'Noreply',
    'dateFormat' => 'MMM dd, yyyy [hh:mm]',
    'shortDateFormat' => 'MMM dd, yyyy',
    'pageSize' => '10',
	),
);
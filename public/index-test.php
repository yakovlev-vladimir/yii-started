<?php
if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1' || $_SERVER['REMOTE_ADDR'] != '::1/128')
    die('Test open only localhost');

/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */

// change the following paths if necessary
$yii=dirname(__FILE__).'/../library/yii/yii.php';
$config=dirname(__FILE__).'/../application/config/test.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();

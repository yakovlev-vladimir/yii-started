<?php
if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1')
    die('Test open only localhost. You ip address: ' . $_SERVER['REMOTE_ADDR']);

/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */


$yii=dirname(__FILE__).'/../library/yii/yii.php';
$config=dirname(__FILE__).'/../application/config/test.php';

defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();

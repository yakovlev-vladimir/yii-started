<?php
date_default_timezone_set('Asia/Sakhalin');
setlocale(LC_TIME, 'ru_RU.UTF-8');
// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Publuc dir
defined('DIR_PUBLIC') ||
    define('DIR_PUBLIC',  dirname(__FILE__));

// Change dir
chdir(DIR_PUBLIC);

// Define framework directory
defined('DIR_LIBRARY') ||
    define('DIR_LIBRARY',  DIR_PUBLIC . '/../library/yii');

// EVN
if (APPLICATION_ENV != 'production') { // Development
    defined('YII_DEBUG') ||
        define('YII_DEBUG',true);

    defined('YII_TRACE_LEVEL') ||
        define('YII_TRACE_LEVEL',3);

    $yii =  DIR_LIBRARY . '/yii.php';

} else { // Production mode

    defined('YII_DEBUG') ||
        define('YII_DEBUG', false);

    $yii = DIR_LIBRARY . '/yiilite.php';
}

$config = APPLICATION_PATH . '/config/' . APPLICATION_ENV .'.php';

require_once($yii);
Yii::createWebApplication($config)->run();
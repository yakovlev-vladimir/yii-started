<?php
/**
 * Created by JetBrains PhpStorm.
 * User: yakovlev
 * Date: 16.10.12
 * Time: 15:14
 */
return CMap::mergeArray(
// наследуемся от main.php
    require(dirname(__FILE__).'/main.php'),
    array(
        'components'=>array(
            // переопределяем компонент db
            'db'=>array(
                'connectionString' => 'mysql:host=localhost;dbname=testdrive',
                'emulatePrepare' => true,
                'username' => 'root',
                'password' => '',
            ),
        ),

        'modules'=>array(
            // uncomment the following to enable the Gii tool

            'gii'=>array(
                'class'=>'system.gii.GiiModule',
                'password'=>'dev',
                // If removed, Gii defaults to localhost only. Edit carefully to taste.
                'ipFilters'=>array('127.0.0.1','::1'),

            ),

        ),
    )
);
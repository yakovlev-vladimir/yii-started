<?php
/**
 * Write: Yakovlev Vladimir | yakovlev.vladimir@hotmail.com
 * Date: 02.12.12
 * Time: 16:17
 * TODO: Build full config
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


        ),
    )
);
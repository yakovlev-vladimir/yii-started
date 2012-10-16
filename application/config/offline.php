<?php
/**
 * Write: Yakovlev Vladimir | yakovlev.vladimir@hotmail.com
 * Date: 02.10.12
 * Time: 13:05
 */
return CMap::mergeArray(
// наследуемся от main.php
    require(dirname(__FILE__).'/main.php'),
    array(
        'catchAllRequest' => array(
                    'offline/notice',
        )
    )
);
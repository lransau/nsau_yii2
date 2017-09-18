<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 18.09.2017
 * Time: 9:16
 */

namespace app\modules\dispatcher\components;


class Debug
{
    public static function debug($a)
    {
        echo '<pre>';
        print_r($a);
        echo '</pre>';
    }
}
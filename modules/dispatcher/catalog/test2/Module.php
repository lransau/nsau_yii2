<?php

namespace app\modules\dispatcher\catalog\test2;
/**
 * test module definition class
 */
class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();

        $this->params['foo'] = '1084';
    }
}
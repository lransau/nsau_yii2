<?php

namespace app\modules\nsautexter;
/**
 * test module definition class
 */

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\nsautexter\controllers';
    public $defaultRoute = 'texter/index';
    public $text_id = '';

    public function init()
    {
        parent::init();
    }

}
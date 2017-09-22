<?php

namespace app\modules\dispatcher\catalog\test;

/**
 * test module definition class
 */
class Module extends \yii\base\Module
{
    public $defaultControllerName = 'DefaultController';
    public $modulesDir = 'catalog/test';
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\dispatcher\catalog\test\controllers';
}

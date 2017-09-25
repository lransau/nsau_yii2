<?php

namespace app\modules\dispatcher\catalog\news;
use yii\base\BootstrapInterface;


/**
 * test module definition class
 */
class Module extends \yii\base\Module  implements BootstrapInterface
{
    public $defaultControllerName = 'DefaultController';
    public $modulesDir = 'catalog/news';
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\dispatcher\catalog\news\controllers';

    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {

        $app->getUrlManager()->addRules([
            ['class' => 'yii\web\UrlRule', 'pattern' => $this->id, 'route' => $this->id . '/default/index'],
            ['class' => 'yii\web\UrlRule', 'pattern' => $this->id . '/<id:\w+>', 'route' => $this->id . '/default/view'],
            ['class' => 'yii\web\UrlRule', 'pattern' => $this->id . '/<controller:[\w\-]+>/<action:[\w\-]+>', 'route' => $this->id . '/<controller>/<action>'],
        ], false);

    }
    public function init()
    {
        parent::init();
    }
}

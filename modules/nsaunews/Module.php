<?php

namespace app\modules\nsaunews;


class Module extends \yii\base\Module
{
    public $defaultControllerName = 'DefaultController';
    public $controllerNamespace = 'app\modules\nsaunews\controllers';
    public $defaultRoute = 'news/index';

    public $items_on_page = 10;
    public $category_id;
    public $view_type = 'index';
}

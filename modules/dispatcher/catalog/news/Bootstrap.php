<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 25.09.2017
 * Time: 20:29
 */

namespace app\modules\dispatcher\catalog\news;

use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
//        die;
        $app->getUrlManager()->addRules(
            [
                // объявление правил здесь
                'view/<id:\d+>' => 'site/about',
            ]
        );
    }
}
<?php

namespace app\modules\dispatcher;
use Yii;
/**
 * dispatcher module definition class
 */
class Module extends BasicModule
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        Yii::setAlias('@dispatcher_modules', '@app/modules/dispatcher/catalog');
        $this ->modules = [
            'test' => [
                'class' => 'app\modules\dispatcher\catalog\test\Module' ,
            ],
            'texter' => [
                'class' => 'app\modules\dispatcher\catalog\texter\Module' ,
            ],
             'news' => [
                'class' => 'app\modules\dispatcher\catalog\news\Module' ,
            ],
        ];
    }
}

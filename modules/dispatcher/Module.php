<?php

namespace app\modules\dispatcher;

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
        $this ->modules = [
            'test' => [
                'class' => 'app\modules\dispatcher\catalog\test\Module' ,
            ],
            'texter' => [
                'class' => 'app\modules\dispatcher\catalog\texter\Module' ,
            ],
        ];
    }
}

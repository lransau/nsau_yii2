<?php

namespace app\modules\nsautexter;
/**
 * test module definition class
 */

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\nsautexter\controllers';
//public $layout = false;
    /**
     * Constructor.
     * @param string $id the ID of this module.
     * @param Module $parent the parent module (if any).
     * @param array $config name-value pairs that will be used to initialize the object properties.
     */
//    public function __construct($id, $parent = null, $config = [])
//    {
//        parent::__construct($id, null, $config);
////        $this->config = $config;
//    }

    public function init()
    {
        parent::init();
//        $config = [
//            'components' => [
//                'urlManager' => [
//                    'class' => 'yii\web\UrlManager',
//                    'enablePrettyUrl' => true,
//                    'showScriptName' => false,
//                    'enableStrictParsing' => false,
//                    'rules' => [
//                        'texter/<id:\d+>' => 'nsautexter/texter/index',
//                        'texter/edit' => 'nsautexter/texter/edit',
//                        'texter/save' => 'nsautexter/texter/save',
//                    ],
//                 ]
//             ]
//        ];
//        \Yii::configure($this, $config);
    }

}
<?php

namespace app\modules\dispatcher\catalog\test2\controllers;

use app\modules\dispatcher\catalog\test2\models\TextItems;
use app\modules\dispatcher\components\Controller;
use app\modules\dispatcher\components\Debug;

/**
 * Default controller for the `test` module
 */
class DefaultController extends Controller
{
    public $text_id;
    /**
     * Renders the index view for the module
     * @return string
     * @throws \yii\base\InvalidParamException
     * @throws \yii\base\ViewNotFoundException
     * @throws \yii\base\InvalidCallException
     */
    public function index()
    {
//        Debug::debug;
        $text = TextItems::find()->where(['id' => $this->text_id])->one();
        return $this->render('index', ['text' => $text]);
    }
}

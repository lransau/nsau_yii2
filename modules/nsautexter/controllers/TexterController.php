<?php

namespace app\modules\nsautexter\controllers;

use app\modules\nsautexter\models\TextItems;
use app\modules\nsautexter\forms\EditForm;
use yii\web\Controller;
use Yii;

use yii\web\Response;
//use yii\base\Controller;
/**
 * Default controller for the `test` module
 */
class TexterController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     * @throws \yii\base\InvalidParamException
     * @throws \yii\base\ViewNotFoundException
     * @throws \yii\base\InvalidCallException
     */
    public function actionIndex($id)
    {
        $text = $text = $this->selectText($id);
        return $this->render('index', ['text' => $text]);
    }

    public function actionEdit()
    {
        $this->guardIsAjaxRequest();
        Yii::$app->response->format = Response::FORMAT_HTML;
        $request = Yii::$app->request->get();
        $form = new EditForm();
        $text = $this->selectText($request['id']);
        return $this->renderAjax('edit', ['text' => $text, 'form' => $form]);
    }

    public function actionSave() {
        $this->guardIsAjaxRequest();
        $request = Yii::$app->request->post();
        $text = $this->selectText($request['id']);
        $text->text = $request['text'];
        $text->save();
    }

    public function guardIsAjaxRequest()
    {
        if (!Yii::$app->request->isAjax)
            throw new \Exception('Only ajax requests');
    }

    public function selectText($id) {
        $text = TextItems::find()->where(['id' => $id])->one();
        if(empty($text)) {
            throw new \Exception('Not found');
        }
        return $text;
    }

}

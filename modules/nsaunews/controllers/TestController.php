<?php

namespace app\modules\nsaunews\controllers;

use app\modules\nsaunews\models\NewsItems;
use yii\web\Controller;

/**
 * Default controller for the `test` module
 */
class TestController extends Controller
{
    public function actionView($id)
    {
        return $this->renderNewsByID($id);
    }

    public function renderNewsByID($id) {
        $news = NewsItems::find()->where(['id' => $id])->one();
        if(empty($news)) {
            throw new \Exception('not found');
        }
        return $this->render('view', ['news' => $news]);
    }

}

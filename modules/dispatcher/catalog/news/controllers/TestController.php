<?php

namespace app\modules\dispatcher\catalog\news\controllers;

use app\modules\dispatcher\catalog\news\models\NewsItems;
use app\modules\dispatcher\components\Controller;
use app\modules\dispatcher\components\Debug;
use yii\data\Pagination;

/**
 * Default controller for the `test` module
 */
class TestController extends Controller
{
    public $category_id;
    public $type_id;
    public $view_type = 'index';
    public $items_on_page = 10;
    public $use_pagination = true;
    /**
     * Renders the index view for the module
     * @return string
     * @throws \yii\base\InvalidParamException
     * @throws \yii\base\ViewNotFoundException
     * @throws \yii\base\InvalidCallException
     */
    public function actionView($id)
    {
        return $this->renderNewsByID($id);
    }

    public function renderNewsByID($id) {
        $news = NewsItems::find()->where(['id' => $id])->one();
        if(empty($news)) {
            throw new \Exception('not found');
        }
        return $this->render2('view', ['news' => $news]);
    }

}

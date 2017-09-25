<?php

namespace app\modules\dispatcher\catalog\news\controllers;

use app\modules\dispatcher\catalog\news\models\NewsItems;
use app\modules\dispatcher\components\Controller;
use app\modules\dispatcher\components\Debug;
use yii\data\Pagination;

/**
 * Default controller for the `test` module
 */
class DefaultController extends Controller
{

    public $category_id;
    public $type_id;
    public $view_type = 'index';
    public $items_on_page = 10;

    /**
     * Renders the index view for the module
     * @return string
     * @throws \yii\base\InvalidParamException
     * @throws \yii\base\ViewNotFoundException
     * @throws \yii\base\InvalidCallException
     */
    public function index()
    {
        $query = NewsItems::find();

        $pagination = new Pagination([
            'defaultPageSize' => $this->items_on_page,
            'totalCount' => $query->where(['category_id' => $this->category_id])->count(),
        ]);
//Debug::debug($pagination);
        $news = $query->where(['category_id' => $this->category_id])->limit($pagination->limit)->offset($pagination->offset)->orderBy('time DESC')->all();


//        Debug::debug($news);
        return $this->render($this->view_type, ['news' => $news, 'pagination' => $pagination]);
    }

    public function actionView($id)
    {
        $news = NewsItems::find()->where(['id' => $id])->one();
        return $this->render2('view', ['news' => $news]);
    }
}

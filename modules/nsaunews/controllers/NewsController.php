<?php

namespace app\modules\nsaunews\controllers;

use app\modules\nsaunews\models\NewsItems;
use yii\web\Controller;
use yii\data\Pagination;


class NewsController extends Controller
{

    public function actionView($id)
    {
        return $this->renderNewsByID($id);
    }

    public function actionIndex()
    {
        $query = NewsItems::find();
        $pagination = new Pagination([
            'defaultPageSize' => $this->module->items_on_page,
            'totalCount' => $query->where(['category_id' => $this->module->category_id])->count(),
        ]);
        $news = $query->where(['category_id' => $this->module->category_id])->limit($pagination->limit)->offset($pagination->offset)->orderBy('time DESC')->all();
        return $this->render($this->module->view_type, ['news' => $news, 'pagination' => $pagination]);
    }

    public function actionEdit($id)
    {

        return $this->render('edit', ['id' => $id]);
    }

    public function renderNewsByID($id) {
        $news = NewsItems::find()->where(['id' => $id])->one();
        if(empty($news)) {
            throw new \Exception('not found');
        }
        return $this->render('view', ['news' => $news]);
    }

}

<?php
namespace app\modules\dispatcher\catalog\news\models;

use yii\db\ActiveRecord;

class NewsCategories extends ActiveRecord
{
    public static function tableName()
    {
        return 'news_categories';
    }
}
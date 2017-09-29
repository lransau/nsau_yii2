<?php
namespace app\modules\nsaunews\models;

use yii\db\ActiveRecord;

class NewsCategories extends ActiveRecord
{
    public static function tableName()
    {
        return 'news_categories';
    }
}
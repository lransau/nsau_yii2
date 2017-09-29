<?php
namespace app\modules\nsaunews\models;

use yii\db\ActiveRecord;

class NewsItems extends ActiveRecord
{
    public static function tableName()
    {
        return 'news_items';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 18.09.2017
 * Time: 13:42
 */
namespace app\modules\dispatcher\catalog\texter\models;

use yii\db\ActiveRecord;

class TextItems extends ActiveRecord
{
    public static function tableName()
    {
        return 'text_items';
    }

}
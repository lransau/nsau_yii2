<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 18.09.2017
 * Time: 9:20
 */

namespace app\modules\dispatcher\models;


use yii\db\ActiveRecord;

class EngineFolders extends ActiveRecord
{
    public static function tableName()
    {
        return 'engine_folders';
    }
}
<?php
namespace app\modules\dispatcher\catalog\texter\forms;
use yii\base\Model;

class EditForm extends Model
{
    public $text;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['text'], 'safe'],
        ];
    }
}
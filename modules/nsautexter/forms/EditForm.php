<?php
namespace app\modules\nsautexter\forms;
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
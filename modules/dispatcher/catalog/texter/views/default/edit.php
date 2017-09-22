<?php
use dosamigos\tinymce\TinyMce;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$form = ActiveForm::begin([
    'id' => 'texter',
    'action' => '/dispatcher/texter/default/save'
]); ?>

<?=
$form->field($text, 'text')->widget(TinyMce::className(), [
    'options' => ['rows' => 15],
    'language' => 'ru',
    'clientOptions' => [
        'plugins' => [
            "advlist autolink lists link charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    ]
]);?>
<?= Html::submitButton('Cохранить', ['class' => 'texter_save', 'data-id' => $text->id]) ?>
<?= Html::resetButton('Отмена', ['class' => 'texter_cancel', 'data-id' => $text->id]) ?>

<?php ActiveForm::end(); ?>
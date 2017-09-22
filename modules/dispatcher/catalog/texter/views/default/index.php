<?php
use yii\helpers\Html;
use app\modules\dispatcher\catalog\texter\AppAsset;
AppAsset::register($this);
?>
<div class="texter_content">
    <div class="editable_text">
        <?=HTML::decode($text->text)?>
        <a class="texter_edit" href="#" data-id="<?=$text->id?>">[Редактировать]</a>
    </div>
    <div id="edit<?=$text->id?>"></div>
</div>
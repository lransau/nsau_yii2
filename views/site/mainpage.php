<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use app\modules\dispatcher\Module;

?>
<div class="site-index">
echo 1;
    <?php if (isset($modules[Module::POSITION_HEADER])) { ?>
        <div class="row">
            <?php foreach ($modules[Module::POSITION_HEADER] as $module) {
                echo $module;
            } ?>
        </div>
    <?php } ?>


    <?php if (isset($modules[Module::POSITION_LEFT])) { ?>
        <div class="row">
            <?php foreach ($modules[Module::POSITION_LEFT] as $module) {
                echo $module;
            } ?>
        </div>
    <?php } ?>

    <?php if (isset($modules[Module::POSITION_FOOTER])) { ?>
        <div class="row">
            <?php foreach ($modules[Module::POSITION_FOOTER] as $module) {
                echo $module;
            } ?>
        </div>
    <?php } ?>
</div>

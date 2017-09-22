<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
<!--    --><?php
/*    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    */?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>


<footer id="footer">
    <div class="wrapper">
        <div id="copyright">
            <div class="footer-left">
                &copy;&nbsp;1998-<?php echo date('Y') ?> Новосибирский государственный аграрный университет <br>
                630039, г. Новосибирск, ул. Добролюбова, 160<br/>
                Свидетельство о регистрации СМИ <a href="http://nsau.edu.ru/images/about/smi_license.jpg">Эл №ФС77-43853 от 9 февраля 2011 года.</a>
            </div>
            <div class="footer-right">
                <div class="age"><span class="age_limit">12+</span></div>
                <a href="/support/"> Служба технической поддержки</a><br>
                <a href="/department/commission/">Приемная комиссия</a>
            </div>
        </div>
    </div>
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

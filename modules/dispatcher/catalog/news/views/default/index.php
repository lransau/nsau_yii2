<?php
    use yii\widgets\LinkPager;
    use yii\helpers\Url;
?>
<div class="dispatcher-default-index">
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
    <h1 class="library-news">ТУТ КАТЕГОРИЯ</h1>
    <?foreach ($news as $new) {?>
    <p>
        <div class="short_news ">
            <p class="news_date"><?=Yii::$app->formatter->asDatetime($new->time, 'dd.MM.Y')?>&nbsp;<a href="/department/cit/news/<?=$new->id?>" title="Читать подробнее"><?=$new->title?></a></p>
            <div class="news_text">
                <div class="news_img"><img src="/images/news/default.jpg" alt=""></div>
                <a href="/department/cit/news/<?=$new->id?>" class="nd" title="Читать подробнее"><?=$new->short_text?></a>
            </div>

            <div class="pusher"></div>

            <p><small>Просмотров: 1695</small></p>
            <p class="actions">
                [&nbsp;<a href="/department/cit/news/?node=1116&amp;action=edit_item&amp;id=3831#form">Редактировать</a>&nbsp;]
                [&nbsp;<a href="/department/cit/news/?node=1116&amp;action=hide_item&amp;id=3831">Скрыть</a>&nbsp;]
                [&nbsp;<a href="/department/cit/news/?node=1116&amp;action=delete_item&amp;id=3831" onclick="return confirm('Вы действительно хотите удалить этот материал?')">Удалить</a>&nbsp;]
            </p>
        </div>
    </p>
    <?}?>
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>

<?php
namespace app\modules\dispatcher\catalog\texter;

use yii\web\AssetBundle;
/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class TexterAsset extends AssetBundle
{
    public $sourcePath = '@dispatcher_modules/texter';
    public $js = [
        'js/texter.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
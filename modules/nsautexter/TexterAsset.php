<?php
namespace app\modules\nsautexter;

use yii\web\AssetBundle;
/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class TexterAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/nsautexter';
    public $js = [
        'js/texter.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
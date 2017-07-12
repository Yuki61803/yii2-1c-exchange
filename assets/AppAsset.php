<?php


namespace Yuki61803\exchange1c\assets;


use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'Yuki61803\exchange1c\assets\LuminoAsset',
    ];
}
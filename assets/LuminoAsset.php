<?php


namespace Yuki61803\exchange1c\assets;


use yii\web\AssetBundle;

class LuminoAsset extends AssetBundle
{
    public $sourcePath = '@vendor/Yuki61803/yii2-1c-exchange/assets';
    public $css = [
        'css/bootstrap.min.css',
        'css/datepicker3.css',
        'css/styles.css',
    ];
    public $js = [
        'js/lumino.glyphs.js',
        'js/html5shiv.min',
        'js/respond.min.js'
    ];
    public $publishOptions = [
        'forceCopy' => true
    ];
}
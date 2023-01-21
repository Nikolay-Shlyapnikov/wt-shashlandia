<?php

namespace app\assets;

use yii\web\AssetBundle;

class AboutAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/delivery-meat.css',
        'css/intro.css',
        'css/about.css',
        'css/features.css',
        'css/zones.css',
    ];
    public $js = [
    ];
    public $depends = [
    ];
}
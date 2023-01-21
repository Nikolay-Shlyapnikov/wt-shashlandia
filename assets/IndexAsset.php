<?php

namespace app\assets;

use yii\web\AssetBundle;

class IndexAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/delivery-meat.css',
        'css/category.css',
        'css/services.css',
    ];
    public $js = [
    ];
    public $depends = [
    ];
}
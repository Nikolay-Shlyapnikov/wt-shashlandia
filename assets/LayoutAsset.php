<?php

namespace app\assets;

use yii\web\AssetBundle;

class LayoutAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/header.css',
        'css/footer.css',
    ];
    public $js = [
    ];
    public $depends = [
    ];
}
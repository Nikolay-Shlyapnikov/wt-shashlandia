<?php

namespace app\assets;

use yii\web\AssetBundle;

class PolicyAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/policy.css',
    ];
    public $js = [
    ];
    public $depends = [
    ];
}
<?php

namespace app\assets;

use yii\web\AssetBundle;

class PaymentAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/payment.css',
    ];
    public $js = [
        'https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=55502ef1-cee4-46e9-83bb-5c1c9c45ce97',
        'js/mapbasics.js',
    ];
    public $depends = [
    ];
}
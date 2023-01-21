<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\Menu;

$menuItems = [
    ['label' => 'Главная', 'url' => ['site/index']],
    ['label' => 'О нас', 'url' => ['site/about']],
    ['label' => 'Оплата и доставка', 'url' => ['site/payment']],
    ['label' => 'Контакты', 'url' => ['site/contacts']],
    ['label' => 'Политика конфиденциальности', 'url' => ['site/policy']],
];

$servicesItems = [
    ['label' => 'Доставка готовой еды', 'url' => '#'],
    ['label' => 'Корпоративного питание', 'url' => '#'],
    ['label' => 'Везу банкет', 'url' => '#'],
    ['label' => 'Доставка поминальных обедов', 'url' => '#'],
];

?>
<footer class="page-footer">
    <div class="container">
        <div class="row-top">
            <div class="left-wrapper">
                <h3>Контакты</h3>
                <p>24 часа</p>
                <a href="tel:<?= Yii::$app->params['contacts'][0] ?>"><?= Yii::$app->params['contacts'][0] ?></a>
                <a href="mailto:<?= Yii::$app->params['contacts'][1] ?>"><?= Yii::$app->params['contacts'][1] ?></a>
                <p><?= Yii::$app->params['contacts'][2] ?></p>
            </div>

            <div class="center-wrapper">
                <h3><span>tyteda</span> | <span><?= Html::encode(Yii::$app->name) ?></span></h3>
                <?= Menu::widget(['items' => $menuItems, 'activeCssClass' => 'active']) ?>
            </div>

            <div class="right-wrapper">
                <h3>Дополнительные услуги</h3>
                <?= Menu::widget(['items' => $servicesItems]) ?>
            </div>
        </div>
        <div class="row-bottom">
            <div class="copyright">
                <p><?= Yii::$app->params['copyright'][0] ?></p>
                <p><?= Yii::$app->params['copyright'][1] ?></p>
            </div>
        </div>
    </div>
</footer>

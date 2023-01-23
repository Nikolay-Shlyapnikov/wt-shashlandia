<?php

/** @var yii\web\View $this */

use app\assets\AboutAsset;

$this->title = Yii::$app->name . ' | О нас';
AboutAsset::register($this);

?>
<section class="delivery-meat">
    <div class="delivery-meat__wrapper">
        <div class="delivery-meat__info">
            <h1 class="delivery-meat__title">Информация о нас</h1>
        </div>
    </div>
    <div id="category" class="invisible-separator"></div>
</section>
<section class="about">
    <div class="container">
        <h2 class="visually-hidden">Шашландия</h2>
        <div class="left-wrapper">
            <img src="<?= Yii::getAlias('@images') ?>/about-text.svg" width="559" height="106" alt="">
            <p>Это лидер среди сервисов организации Ваших пикников!</p>
            <p>Наш сервис доставки «Шашландия» привезет Вам все самое необходимое для шашлыка и пикника; мясо, овощи, мангал, уголь, воду.</p>
            <p>Где бы Вы ни находились, дома или уже на природе, мы доставим Вам мясо высшего сорта и все самое необходимое для приготовления шашлыка максимально быстро</p>
            <p>Используем только фермерское мясо.</p>
            <p>Маринуем по фирменному рецепту.</p>
        </div>
        <div class="right-wrapper">
            <div class="barbecue-img"></div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <h2 class="visually-hidden">Особенности</h2>
        <ul>

            <?php foreach (Yii::$app->params['features'] as $feature): ?>
                <li>
                    <div class="icon"></div>
                    <!-- Html::encode() не нужен! -->
                    <p><?= $feature ?></p>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</section>
<section class="zones">
    <div class="container">
        <div class="planet"></div>
        <h2>Зоны доставки</h2>
        <p>Пунктуальность – наш конёк.<br>Поэтому мы всегда привозим<br>Ваш заказ вовремя!</p>
        <p>Наша курьерская служба работает как<br>часы, составляя продуманные маршруты.<br>Курьеры всегда приезжают вовремя,<br>независимо от дорожной обстановки.</p>
        <a class='primary-button' href="#">На главную</a>
    </div>
</section>

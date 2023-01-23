<?php

/** @var yii\web\View $this */

use yii\widgets\Menu;

?>
<header class="page-header">
    <div class="page-header__wrapper">
        <div class="page-header__burger">
            <span></span>
        </div>
        <div class="page-header__logo">
            <a href="<?= Yii::$app->homeUrl ?>">
                <img src="<?= Yii::getAlias('@images') ?>/header-logo.svg" alt="">
            </a>
        </div>
        <nav class="page-header__nav">
            <?= Menu::widget([
                'items' => Yii::$app->params['menuItems'],
                'options' => ['class' => 'page-header__nav-list'],
                'itemOptions' => ['class' => 'page-header__item'],
                'activeCssClass' => Yii::$app->params['menuItemActive'],
            ]) ?>
        </nav>
    </div>
</header>

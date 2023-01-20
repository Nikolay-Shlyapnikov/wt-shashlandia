<?php

/** @var yii\web\View $this */

?>
<header class="page-header">
    <div class="page-header__wrapper">
        <div class="page-header__burger">
            <span></span>
        </div>
        <div class="page-header__logo">
            <a href="<?= Yii::$app->homeUrl ?>">
                <img src="./img/header_logo.svg" alt="" srcset="">
            </a>
        </div>
        <nav class="page-header__nav">
            <ul class="page-header__nav-list">
                <li><a href="./index.html" class="page-header__item">Главная</a></li>
                <li><a href="./about.html" class="page-header__item">О нас</a></li>
                <li><a href="./payment.html" class="page-header__item">Оплата и доставка</a></li>
                <li><a href="./contacts.html" class="page-header__item">Контакты</a></li>
            </ul>
        </nav>
    </div>
</header>

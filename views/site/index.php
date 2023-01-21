<?php

/** @var yii\web\View $this */

use app\assets\IndexAsset;

$this->title = Yii::$app->name . ' | Главная';
IndexAsset::register($this);

?>

<section class="delivery-meat">
    <div class="delivery-meat__wrapper">
        <div class="delivery-meat__info">
            <h1 class="delivery-meat__title">Доставим всё для<br> шашлыка и пикника</h1>
            <a href="#category" class="primary-button delivery-meat__button">Начать покупки</a>
        </div>
        <video class="delivery-meat__video" autoplay muted loop src="<?= Yii::getAlias('@videos') ?>/delivery-meat.mp4"></video>
    </div>
    <div id="category" class="invisible-separator"></div>
</section>

<section class="category">
    <div class="container">
        <h2 class="category__title">Категории</h2>
        <div class="category__wrapper">
            <div class="category__item-wrapper">
                <a class="category__item pink" href="#">
                    <h3 class="category__item-title">Мясо</h3>
                    <p class="category__item-text">Для всех вкусовых предпочтений</p>
                    <div class="category__item-image cart1"></div>
                </a>
                <a class="category__item yellow" href="#">
                    <h3 class="category__item-title">Овощи</h3>
                    <p class="category__item-text">Всегда самые свежие</p>
                    <div class="category__item-image cart2"></div>

                </a>
            </div>

            <div class="category__item-wrapper">
                <a class="category__item blue" href="#">
                    <h3 class="category__item-title">Все для шашлыка</h3>
                    <p class="category__item-text">Мангалы, уголь, вода, разжигательная смесь</p>
                    <div class="category__item-image cart3"></div>

                </a>
            </div>

            <div class="category__item-wrapper">
                <a class="category__item green" href="#services">
                    <h3 class="category__item-title">Услуги</h3>
                    <p class="category__item-text">Профессиональный мангальщик</p>
                    <div class="category__item-image cart4"></div>
                </a>
            </div>
        </div>
    </div>

</section>

<section id="services" class="services">
    <div class="container">
        <h2 class="services__title">Дополнительные услуги</h2>
        <div class="services__wrapper">
            <div class="services__text">
                <h3 class="services__text-title">Профессиональный мангальщик</h3>
                <p class="services__text-text">Профессиональный мангальщик, позаботится о Вашем времени и возьмёт всю работу по приготовлению шашлыка на себя. А Вы в это время сможете отдыхать и наслаждаться компанией родных и друзей.</p>
            </div>

            <div class="services__image"></div>
            <div class="services__info">
                <div class="services__info-wrapper">
                    <div class="services__info-name">Мангальщик</div>
                    <div class="services__info-price">
                        <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                            <path d="M13.5 3H7v9H5v2h2v2H5v2h2v3h2v-3h4v-2H9v-2h4.5c3.04 0 5.5-2.46 5.5-5.5S16.54 3 13.5 3zm0 9H9V5h4.5C15.43 5 17 6.57 17 8.5S15.43 12 13.5 12z"></path>
                        </svg>
                        <span>1750</span>
                    </div>
                    <div class="services__info-time">
                        <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                            <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path>
                            <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"></path>
                        </svg>
                        <span>1 час</span>
                    </div>
                    <button class="services__button">Нанять</button>
                </div>

            </div>
        </div>
    </div>
</section>

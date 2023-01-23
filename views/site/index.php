<?php

/** @var yii\web\View $this */
/** @var app\models\Category[] $categories */

use app\assets\IndexAsset;
use yii\helpers\Html;
use yii\helpers\Json;

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

            <?php foreach ($categories as $category): ?>
                <?php [$top, $bottom] = array_values(Json::decode($category['wrapper'])); ?>

                <?php if ($top): ?>
                    <div class="category__item-wrapper">
                <?php endif; ?>

                <a class="category__item <?= Html::encode($category['modifier']) ?>" href="#">
                    <h3 class="category__item-title"><?= Html::encode($category['title']) ?></h3>
                    <p class="category__item-text"><?= $category['desc'] ?></p>
                    <div class="category__item-image"></div>
                </a>

                <?php if ($bottom): ?>
                    </div>
                <?php endif; ?>

            <?php endforeach; ?>

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

<?php

/** @var yii\web\View $this */

use app\assets\ContactsAsset;

$this->title = Yii::$app->name . ' | Контакты';
ContactsAsset::register($this);

?>
<section class="contacts">
    <div class="container">
        <h1>Контакты</h1>
        <div class="map-wrapper">
            <div id="map"></div>
            <div id="map-info">
                <div class="map-info__inner">
                    <h3>Режим работы:</h3>
                    <p>Круглосуточно</p>
                    <p>Без выходных</p>

                    <h3>Адрес:</h3>
                    <p><?= Yii::$app->params['contacts'][2]['value'] ?></p>

                    <h3>Свяжитесь с нами:</h3>
                    <?= $this->render('/partials/_contacts.php') ?>
                </div>
            </div>
        </div>
    </div>
</section>

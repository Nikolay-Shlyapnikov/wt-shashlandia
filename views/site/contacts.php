<?php

/** @var yii\web\View $this */

$this->title = Yii::$app->name . ' | Контакты';

$this->registerCssFile('css/contacts.css');
$this->registerJsFile('https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=55502ef1-cee4-46e9-83bb-5c1c9c45ce97');
$this->registerJsFile('js/mapbasics.js');

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
                    <p>г. Москва, ул. Сталеваров, дом 14, корпус 1</p>

                    <h3>Свяжитесь с нами:</h3>
                    <a href="tel:+74951396444">+7 (495) 139-64-44</a>
                    <a href="mailto:dostavka@tyteda.ru">dostavka@tyteda.ru</a>
                </div>
            </div>
        </div>
    </div>
</section>

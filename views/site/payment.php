<?php

/** @var yii\web\View $this */

$this->title = Yii::$app->name . ' | Оплата и доставка';

$this->registerCssFile('css/payment.css');
$this->registerJsFile('https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=55502ef1-cee4-46e9-83bb-5c1c9c45ce97');
$this->registerJsFile('js/mapbasics.js');

?>
<section class="payment">
    <div class="container">
        <h1>Оплата и доставка</h1>
        <ul>
            <li>
                <h3>Доставка</h3>
                <p>Круглосуточно без выходных и праздников<br>Время и цена доставки зависит от зоны</p>    
            </li>
            <li>
                <h3>Оплата</h3>
                <p>Принимается только онлайн оплата<br>К оплате принимаются платежные карты: VISA Inc, MasterCard WorldWide, МИР.</p>
                <ul>
                    <li><img src="./img/visa.svg" width="51" alt=""></li>
                    <li><img src="./img/mir.svg" width="56" alt=""></li>
                    <li><img src="./img/mastercard.svg" width="34" alt=""></li>
                    <li><img src="./img/paykeeper.png" width="99" alt=""></li>
                </ul>    
            </li>
            <li>
                <h3>Отказ от услуги</h3>
                <p>Отказ от доставки регламентируется статьей 32 федерального закона «О защите прав потребителей», но не менее чем за сутки</p>    
            </li>
        </ul>
    </div>
</section>

<section class="map">
    <div class="container">
        <div id="map"></div>
        <!-- <input type="button" id="destroyButton" value="Удалить карту"/> -->
    </div>
</section>

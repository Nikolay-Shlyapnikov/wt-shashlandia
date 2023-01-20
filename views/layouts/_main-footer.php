<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\widgets\Menu;

?>
<footer class="page-footer">
    <div class="container">
        <div class="row-top">
            <div class="left-wrapper">
                <h3>Контакты</h3>
                <p>24 часа</p>
                <a href="tel:84951396444">8(495)139-64-44</a>
                <a href="mailto:dostavka@tyteda.ru">dostavka@tyteda.ru</a>
                <p>г. Москва, Сталеваров ул., д.14, корпус 1</p>
            </div>

            <div class="center-wrapper">
                <h3><span>tyteda</span> | <span>Шашландия</span></h3>

                <?php
                $menuItems = [
                    ['label' => 'Главная', 'url' => ['site/index']],
                    ['label' => 'О нас', 'url' => ['site/about']],
                    ['label' => 'Оплата и доставка', 'url' => ['site/payment']],
                    ['label' => 'Контакты', 'url' => ['site/contacts']],
                    ['label' => 'Политика конфиденциальности', 'url' => ['site/policy']],
                ];
                ?>

                <?= Menu::widget([
                    'items' => $menuItems,
                    'activeCssClass' => 'active',
                ]); ?>
            </div>

            <div class="right-wrapper">
                <h3>Дополнительные услуги</h3>
                <ul>
                    <li><a href="#">Доставка готовой еды</a></li>
                    <li><a href="#">Корпоративного питание</a></li>
                    <li><a href="#">Везу банкет</a></li>
                    <li><a href="#">Доставка поминальных обедов</a></li>
                </ul>
            </div>
        </div>
        <div class="row-bottom">
            <div class="copyright">
                <p>ООО "БКФ" ОГРН: 5177746201221 ИНН: 7720402524, Не является публичной офертой, Copyright &copy; tyteda.ru 2023.</p>
                <p>Сделано <a href="https://wetop.ru"><span>wetop</span> digital agency</a></p>
            </div>
        </div>
    </div>
</footer>

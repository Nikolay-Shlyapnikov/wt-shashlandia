<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\Menu;

?>
<footer class="page-footer">
    <div class="container">
        <div class="row-top">
            <div class="left-wrapper">
                <h3>Контакты</h3>
                <p>24 часа</p>

                <?= $this->render('/partials/_contacts.php') ?>

            </div>
            <div class="center-wrapper">
                <h3><span>tyteda</span> | <span><?= Html::encode(Yii::$app->name) ?></span></h3>
                <?= Menu::widget([
                    'items' => Yii::$app->params['menuItems'],
                    'activeCssClass' => Yii::$app->params['menuItemActive'],
                ]) ?>
            </div>
            <div class="right-wrapper">
                <h3>Дополнительные услуги</h3>
                <?= Menu::widget(['items' => Yii::$app->params['servicesItems']]) ?>
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

<?php

/** @var yii\web\View $this */

use app\assets\PaymentAsset;

$this->title = Yii::$app->name . ' | Оплата и доставка';
PaymentAsset::register($this);

?>
<section class="payment">
    <div class="container">
        <h1>Оплата и доставка</h1>
        <ul>

            <?php foreach (Yii::$app->params['paymentItems'] as $item): ?>
                <li>
                    <h3><?= $item['title'] ?></h3>
                    <p><?= $item['desc'] ?></p>

                    <?php if (isset($item['icons'])): ?>
                        <ul>

                            <?php foreach ($item['icons'] as $icon): ?>
                                <li>
                                    <img src="<?= Yii::getAlias('@images') . '/' . $icon['src'] ?>" width="<?= $icon['width'] ?>" alt="">
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    <?php endif; ?>

                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</section>

<section class="map">
    <div class="container">
        <div id="map"></div>
    </div>
</section>

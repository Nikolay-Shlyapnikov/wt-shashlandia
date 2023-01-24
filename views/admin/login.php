<?php

/** @var yii\web\View $this */

use app\assets\AdminAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = Yii::$app->name . ' | Вход';
AdminAsset::register($this);

?>
<div class="modal fade show" id="loginModal" style="display: block; color: #212529;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Вход</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php $form = ActiveForm::begin([
                    'action' => Url::to(['admin/login']),
                    // 'enableAjaxValidation' => true,
                    'options' => ['novalidate' => true, 'autocomplete' => 'off'],
                    'fieldConfig' => [
                        'labelOptions' => ['class' => 'form-label'],
                        'inputOptions' => ['class' => 'form-control'],
                        'errorOptions' => ['class' => 'invalid-feedback', 'style' => 'display: block'],
                    ]
                ]); ?>

                    <?= $form->field($model, 'email')->input('email') ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <div class="d-grid gap-2 mt-3">
                        <?= Html::submitButton('Войти', ['class' => 'btn btn-primary']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

                <!-- <form novalidate autocomplete="off">
                    <div class="mb-3">
                        <label for="login-email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="login-email">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label for="login-password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="login-password">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Войти</button>
                    </div>
                </form> -->
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show"></div>

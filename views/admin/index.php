<?php

/** @var yii\web\View $this */

use app\assets\AdminAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = Yii::$app->name . ' | Админ-панель';
AdminAsset::register($this);

?>

<?= $this->render('/layouts/_admin-header.php') ?>

<div class="modal fade show" style="display: block;">
    <div class="modal-dialog" style="margin-top: 100px;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Форма добавления товара</h1>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <?= Alert::widget() ?>
                <?php $form = ActiveForm::begin([
                    'action' => Url::to(['admin/index']),
                    // 'enableAjaxValidation' => true,
                    'options' => ['novalidate' => true, 'autocomplete' => 'on'],
                    'fieldConfig' => [
                        'labelOptions' => ['class' => 'form-label'],
                        'inputOptions' => ['class' => 'form-control'],
                        'errorOptions' => ['class' => 'invalid-feedback', 'style' => 'display: block'],
                    ]
                ]); ?>

                    <?= $form->field($model, 'title')->textInput() ?>
                    <?= $form->field($model, 'desc')->textInput() ?>
                    <?= $form->field($model, 'price')->textInput() ?>
                    <?= $form->field($model, 'category_id')->textInput() ?>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <div class="d-grid gap-2 mt-3">
                        <?= Html::submitButton('Войти', ['class' => 'btn btn-primary']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
<!-- <div class="modal-backdrop fade show"></div> -->

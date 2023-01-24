<?php

/** @var yii\web\View $this */

use app\assets\AdminAsset;

$this->title = Yii::$app->name . ' | Админ-панель';
AdminAsset::register($this);

?>
<h1>Админ-панель</h1>
<a href="/logout">Выход</a>
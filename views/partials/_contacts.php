<?php

/** @var yii\web\View $this */

use wetop\helpers\StringHelper;

?>
<?php foreach (Yii::$app->params['contacts'] as $contact): ?>

    <?php if (isset($contact['protocol'])): ?>
        <a href="<?= $contact['protocol'] ?>:<?= StringHelper::cut($contact['value']) ?>"><?= $contact['value'] ?></a>
    <?php else: ?>
        <p><?= $contact['value'] ?></p>
    <?php endif; ?>

<?php endforeach; ?>
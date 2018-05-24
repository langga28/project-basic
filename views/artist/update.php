<?php

use yii\helpers\Html;

$this->title = "Update Artist: $model->lastName";
$this->params['breadcrumbs'][] = ['label' => 'Artist', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lastName, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="artist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

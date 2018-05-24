<?php

use yii\helpers\Html;


$this->title = 'Create Artist';
$this->params['breadcrumbs'][] = ['label' => 'Artist', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

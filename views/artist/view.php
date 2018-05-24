<?php

use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "Artist: $model->firstName";
$this->params['breadcrumbs'][] = ['label'=>'Artist', 'url'=>['/artist/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this artist?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'firstName',
        'lastName',
        'gender',
        'nationality',
        'DOB',
        
    ]
]);
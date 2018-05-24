<?php

use yii\helpers\Html;


$this->title = "Film";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Film', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country</th>
        <th>ReleaseYear</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->id, ['/film/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->name?></td>
        <td><?= $model->country ?></td>
        <td><?= $model->releaseYear ?></td>
    </tr>
    <?php endforeach; ?>
</table>

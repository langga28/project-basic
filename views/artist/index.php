<?php


use yii\helpers\Html;


$this->title = "Artist";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Artist', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Gender</th>
        <th>Nationality</th>
        <th>DOB</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->id, ['/artist/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->firstName ?></td>
        <td><?= $model->lastName ?></td>
        <td><?= $model->gender ?></td>
        <td><?= $model->nationality ?></td>
        <td><?= $model->DOB?></td>
    </tr>
    <?php endforeach; ?>
</table>

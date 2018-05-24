<?php

use yii\helpers\Html;


$this->title = "Role";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Role', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Artist_Id</th>
        <th>Film_Id</th>
        <th>RoleInFilm</th>
        <th>NameInFilm</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->lastName, ['/role/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->artist_id ?></td>
        <td><?= $model->film_id ?></td>
        <td><?= $model->roleinfilm ?></td>
        <td><?= $model->nameinfilm?></td>
    </tr>
    <?php endforeach; ?>
</table>

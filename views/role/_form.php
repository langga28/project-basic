<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="role-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'artist_id')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'film_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roleinfilm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameinfilm')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

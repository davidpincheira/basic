<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ManEvento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="man-evento-form-dsf">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model,'fecha')->textInput() ?> 
    <?= $form->field($model, 'descripcion')->textarea(['maxlength' => true]) ?>
    <?= $form->field($model,'man_evento_id')->hiddenInput() ?> 
    <?= \yii\bootstrap\Html::dropDownList('estado',null, \app\models\ManEvento::$opciones_estado) ?> 
    <br><br>
        
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

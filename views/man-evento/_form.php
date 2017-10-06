<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ManEvento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="man-evento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true, 'style'=>'width:47%']) ?>

    <?= $form->field($model, 'detalle_evento')->textarea(['maxlength' => true, 'style'=>'width:47%']) ?>
    

    <?= $form->field($model,'fecha')->textInput(['style'=>'width:47%']) ?> 
        
    <?php $var = \yii\helpers\ArrayHelper::map($cli_sectores, 'id', 'nombre'); ?>
        
    <?=  $form->field($model, 'cli_sector_id')->dropDownList($var, ['prompt' => 'Seleccione Uno' , 'style'=>'width:47%'])  ; ?>
    
    
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

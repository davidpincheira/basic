<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profesionales */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesionales-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'localidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provincia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'matricula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COD_POS')->textInput() ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activado')->textInput() ?>

    <?= $form->field($model, 'comentario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factura_internacion')->textInput() ?>

    <?= $form->field($model, 'factura_ambulatorio')->textInput() ?>

    <?= $form->field($model, 'tipo_profesional')->textInput() ?>

    <?= $form->field($model, 'cantidad_sobreturnos')->textInput() ?>

    <?= $form->field($model, 'codigo_contable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'baja_fecha')->textInput() ?>

    <?= $form->field($model, 'fondo_inversion_endoscopia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProfesionalesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesionales-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idprofesional') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'rol') ?>

    <?= $form->field($model, 'direccion') ?>

    <?= $form->field($model, 'localidad') ?>

    <?php // echo $form->field($model, 'provincia') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'matricula') ?>

    <?php // echo $form->field($model, 'COD_POS') ?>

    <?php // echo $form->field($model, 'mail') ?>

    <?php // echo $form->field($model, 'activado') ?>

    <?php // echo $form->field($model, 'comentario') ?>

    <?php // echo $form->field($model, 'factura_internacion') ?>

    <?php // echo $form->field($model, 'factura_ambulatorio') ?>

    <?php // echo $form->field($model, 'tipo_profesional') ?>

    <?php // echo $form->field($model, 'cantidad_sobreturnos') ?>

    <?php // echo $form->field($model, 'codigo_contable') ?>

    <?php // echo $form->field($model, 'cuit') ?>

    <?php // echo $form->field($model, 'baja_fecha') ?>

    <?php // echo $form->field($model, 'fondo_inversion_endoscopia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

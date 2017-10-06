<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ManEventoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="man-evento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'detalle_evento') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'fecha_visto') ?>

    <?php // echo $form->field($model, 'cli_profesional_actuante_id') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'fecha_finalizacion') ?>

    <?php // echo $form->field($model, 'fecha_finalizacion_real') ?>

    <?php // echo $form->field($model, 'baja_fecha') ?>

    <?php // echo $form->field($model, 'cli_sector_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

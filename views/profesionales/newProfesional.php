<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ManEvento */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Nuevo Profesional'; 
?>
<?php ?>
<div class="profesionales-form">  

    <?php $form = ActiveForm::begin(); ?>
    <h1><?= Html::encode($this->title) ?></h1>
    
    <?= $form->field($model,'nombre')->textInput() ?> 
    <?= $form->field($model,'rol')->textInput() ?> 
    <?= $form->field($model,'direccion')->textInput() ?> 
    <?= $form->field($model,'localidad')->textInput() ?> 
    <?= $form->field($model,'provincia')->textInput() ?> 
    <?= $form->field($model,'telefono')->textInput() ?> 
    <?= $form->field($model,'matricula')->textInput() ?> 
    <?= $form->field($model,'cod_pos')->textInput() ?> 
    <?= $form->field($model,'mail')->textInput() ?> 
    <?= $form->field($model,'activado')->textInput() ?> 
    <?= $form->field($model,'comentario')->textarea() ?> 
    <?= $form->field($model,'factura_internacion')->textInput() ?> 
    <?= $form->field($model,'factura_ambulatorio')->textInput() ?> 
    <?= $form->field($model,'tipo_profesional')->textInput() ?> 
    <?= $form->field($model,'cantidad_sobreturnos')->textInput() ?> 
    <?= $form->field($model,'codigo contable')->textInput() ?> 
    <?= $form->field($model,'cuit')->textInput() ?> 
    <?= $form->field($model,'baja_fecha')->textInput() ?> 
    <?= $form->field($model,'fondo_inversion_endoscopia')->textInput() ?> 
        
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

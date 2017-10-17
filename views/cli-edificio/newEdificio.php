<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ManEvento */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Nuevo Edificio'; 
?>
<?php ?>
<div class="cli-edificio-form">  

    <?php $form = ActiveForm::begin(); ?>
    <h1><?= Html::encode($this->title) ?></h1>
    
    <?= $form->field($model,'nombre')->textInput() ?> 
    <?= $form->field($model,'direccion')->textInput() ?> 
    <?= $form->field($model,'baja_fecha')->textInput() ?> 
            
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
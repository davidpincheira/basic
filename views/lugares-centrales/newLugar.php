<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ManEvento */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Nuevo Lugar Central'; 
?>
<?php ?>
<div class="lugares-centrales-form">  

    <?php $form = ActiveForm::begin(); ?>
    <h1><?= Html::encode($this->title) ?></h1>
    
    <?= $form->field($model,'nombre')->textInput() ?> 
        
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ManEvento */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Nuevo Sector'; 
?>
<?php ?>
<div class="cli-sector-form">  

    <?php $form = ActiveForm::begin(); ?>
    <h1><?= Html::encode($this->title) ?></h1>
    
    <?= $form->field($model,'nombre')->textInput() ?> 
    <?= $form->field($model,'estado')->textInput() ?> 
    <?= $form->field($model,'cli_lugar_central_id')->textInput() ?> 
    <?= $form->field($model,'cli_sectori_padre_id')->textInput() ?> 
        
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
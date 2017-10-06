<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Profesionales */

$this->title = 'Update Profesionales: ' . $model->idprofesional;
$this->params['breadcrumbs'][] = ['label' => 'Profesionales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idprofesional, 'url' => ['view', 'id' => $model->idprofesional]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profesionales-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

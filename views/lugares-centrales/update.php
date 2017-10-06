<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LugaresCentrales */

$this->title = 'Actualizar Lugar Central';
$this->params['breadcrumbs'][] = ['label' => 'Lugares Centrales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="lugares-centrales-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model
    ]) ?>

</div>

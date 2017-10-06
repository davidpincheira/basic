<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ManEvento */

$this->title = 'Actualizar incidencia: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Man Eventos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="man-evento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'cli_sectores' => $cli_sectores,
    ]) ?>

</div>

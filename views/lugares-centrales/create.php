<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LugaresCentrales */

$this->title = 'Crear Lugar Central';
$this->params['breadcrumbs'][] = ['label' => 'Lugares Centrales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lugares-centrales-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

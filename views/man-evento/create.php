<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ManEvento */

$this->title = 'Incidencia Nueva';
$this->params['breadcrumbs'][] = ['label' => 'Incidencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="man-evento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model, 'cli_sectores' => $cli_sectores
    ]) ?>

</div>

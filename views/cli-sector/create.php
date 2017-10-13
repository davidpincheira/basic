<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CliSector */

$this->title = 'Crear Sector';
$this->params['breadcrumbs'][] = ['label' => 'Cli Sectors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cli-sector-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

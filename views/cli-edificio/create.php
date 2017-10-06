<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CliEdificio */

$this->title = 'Create Cli Edificio';
$this->params['breadcrumbs'][] = ['label' => 'Cli Edificios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cli-edificio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

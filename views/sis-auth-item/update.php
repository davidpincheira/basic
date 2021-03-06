<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SisAuthItem */

$this->title = 'Update Sis Auth Item: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sis Auth Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sis-auth-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SisAuthItem */

$this->title = 'Create Sis Auth Item';
$this->params['breadcrumbs'][] = ['label' => 'Sis Auth Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sis-auth-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

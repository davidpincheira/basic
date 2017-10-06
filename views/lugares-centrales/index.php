<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LugaresCentralesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lugares Centrales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lugares-centrales-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Lugar Central', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nombre',
            'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

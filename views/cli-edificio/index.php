<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CliEdificioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cli Edificios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cli-edificio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cli Edificio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'direccion',
            'baja_fecha',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

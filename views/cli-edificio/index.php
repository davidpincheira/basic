<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CliEdificioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Edificios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cli-edificio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <p>
        <?= Html::a('Edificio Nuevo', '',//Boton de nueva incidencia
                ['id' => 'create-edificio',
                'class' => 'btn btn-success',
                'data-toggle' => 'modal',
                'data-target' => '#modal',
                'data-url' => Url::to(['create']),
                'data-pjax' => '0', ]); ?>         
    </p>
    <?php
        yii\bootstrap\Modal::begin(['id' =>'modal']);
        yii\bootstrap\Modal::end();
    ?>

  
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


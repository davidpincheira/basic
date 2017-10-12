<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

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
        <?= Html::a('Nuevo Lugar Central', '',
                ['id' => 'create-lugar',
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
            
            'nombre',
            'estado',       
               
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

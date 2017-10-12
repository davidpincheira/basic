<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CliSectorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cli Sectors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cli-sector-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Html::a('Nuevo Sector', '',//Boton de nueva incidencia
                ['id' => 'create-sector',
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
            'estado',
            'cli_lugar_central_id',
            'cli_sector_padre_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

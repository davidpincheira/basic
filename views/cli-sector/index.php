<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CliSectorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cli Sectors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cli-sector-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cli Sector', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
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

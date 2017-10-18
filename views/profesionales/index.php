<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProfesionalesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profesionales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profesionales-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    
    <p>
        <?= Html::a('Nuevo Profesional', '',
                ['id' => 'create-profesional',
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

            'idprofesional',
            'nombre',
            'rol',
            'direccion',
            'localidad',
            // 'provincia',
            // 'telefono',
            // 'matricula',
            // 'COD_POS',
            // 'mail',
            // 'activado',
            // 'comentario',
            // 'factura_internacion',
            // 'factura_ambulatorio',
            // 'tipo_profesional',
            // 'cantidad_sobreturnos',
            // 'codigo_contable',
            // 'cuit',
            // 'baja_fecha',
            // 'fondo_inversion_endoscopia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

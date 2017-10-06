<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProfesionalesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profesionales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profesionales-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Profesionales', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
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

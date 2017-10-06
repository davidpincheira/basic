<?php

use yii\helpers\Html;
use yii\grid\GridView;
//use yii\bootstrap\Modal; //para que funcione el modal
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $searchModel app\models\ManEventoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Incidencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="man-evento-index">

    <h1><?= Html::encode($this->title) ?></h1>
  
    <p>
        <?= Html::a('Incidencia Nueva', '',//Boton de nueva incidencia
                ['id' => 'create-incidencia',
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
    <?= 
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel, //para filtrar

            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'titulo',
                'detalle_evento',
                'fecha',
                'fecha_visto',
                // 'cli_profesional_actuante_id',
                [
                    'class' => 'yii\grid\ActionColumn',

                    'template' => '{view}{update}{delete}', //defino que iconos voy a mostrar

                    'buttons' => [                                                                 //manejo las propiedades del boton
                        'update' => function ($url, $model, $key) {
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', '#', [
                               // 'id' => 'activity-index-link',
                                'title' => Yii::t('app', 'Actualizar'),
                                'data-toggle' => 'modal',
                                'data-target' => '#modal',
                                'data-action' => 'update',
                                'data-pjax' => '0',
                                'data-url' => Url::to(['update', 'id' => $model->id]),                            
                            ]);
                        },

                    ]
                ],
            ],
        ]);
    ?>
</div>




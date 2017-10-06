<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\ManEvento*/

$this->title ='Detalle incidencia: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Incidencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="man-evento-view">
    <h1><?= Html::encode($this->title) ?></h1>
    
        <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'titulo',
            'detalle_evento',
            'fecha',
            'cli_sector_id',
            'cli_profesional_actuante_id',
            'estado',
        ],
    ]) ?>
    
    <?php
        yii\bootstrap\Modal::begin(['id' =>'modal']);
        yii\bootstrap\Modal::end();
    ?>
  <div class="man-evento-view">
    <p>
        
        <?= Html::a('<span class="btn btn-primary">Actualizar</span>', '#', [
                           // 'id' => 'activity-index-link',
                            'title' => Yii::t('app', 'Actualizar'),
                            'data-toggle' => 'modal',
                            'data-target' => '#modal',
                            'data-action' => 'update',
                            'data-pjax' => '0',
                            'data-url' => Url::to(['update', 'id' => $model->id]),                            
                        ]);
        ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro que desea eliminar este Item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
        <p>
        <?= Html::a('Nuevo Seguimiento', '',//
                ['id' => 'newSeguimientojs',//only to js
                'class' => 'btn btn-default',
                'data-toggle' => 'modal',
                'data-target' => '#modal',
                'data-url' => Url::to(['newseguimiento','man_evento_id'=>$model->id]),//at the view
                'data-pjax' => '0', ]); ?>         
    </p>

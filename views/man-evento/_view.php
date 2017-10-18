<?php
 	
//use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ManEvento*/

$this->title = $model->id;
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

    
 <div class="man-evento-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
    
    
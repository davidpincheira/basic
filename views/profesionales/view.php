<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Profesionales */

$this->title = $model->idprofesional;
$this->params['breadcrumbs'][] = ['label' => 'Profesionales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profesionales-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idprofesional], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idprofesional], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idprofesional',
            'nombre',
            'rol',
            'direccion',
            'localidad',
            'provincia',
            'telefono',
            'matricula',
            'COD_POS',
            'mail',
            'activado',
            'comentario',
            'factura_internacion',
            'factura_ambulatorio',
            'tipo_profesional',
            'cantidad_sobreturnos',
            'codigo_contable',
            'cuit',
            'baja_fecha',
            'fondo_inversion_endoscopia',
        ],
    ]) ?>

</div>

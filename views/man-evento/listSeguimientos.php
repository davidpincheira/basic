<?php

use yii\helpers\Html;
use yii\helpers\Url; 
$url = Url::to(['man-evento/index-seguimientos-for-evento-ajax', 'id'=>$model->id]);
    $script = <<< JS
    var man_evento_view_detalle_controller = {
        contenedor_id: 'man_evento_view_seguimientos',
        detail_url: '$url',
        form_container: null,
        report_viewer_container: null,
        report_viewer: null,
                
        
        recargarDetalle: function () {
            var controller = this;
            $.get(controller.detail_url).done(function (data) {
                $("#" + controller.contenedor_id + " #detalle").html(data);
                $("#" + controller.contenedor_id + " #detalle button[data-action='update']").click(function (ev) {
                    ev.preventDefault();
                    controller.getUpdateForm($(this).attr('data-man-evento-seguimiento-id'));
                });
                $("#" + controller.contenedor_id + " #detalle button[data-action='delete']").click(function (ev) {
                    ev.preventDefault();
                    controller.delete($(this).attr('data-man-evento-seguimiento-id'));
                });
            }).error(function (e) {
                alert("Problemas al cargar el detalle para el paciente");
            });

        },
        init: function () {
            console.log("comenzando...")
            var controller = this;
            $("#" + controller.contenedor_id + " #btnNuevoSeguimiento").click(function () {
                controller.getForm();
            });
            controller.recargarDetalle();
            controller.form_container = $("#" + controller.contenedor_id + " #form_container").dialog({
                autoOpen: false,
                'modal': true,
                'width': '500px',
                title: 'Crear Seguimiento'
            }).css({overflow: "auto"});
            controller.report_viewer_container = $("#" + controller.contenedor_id + " #report_viewer_container").dialog({
                autoOpen: false,
                'modal': true,
                'width': '500',
                'height': '500',
                title: 'Reporte'
            }).css({overflow: "scroll"});
        }
    };
    $(document).ready(function(){
        man_evento_view_detalle_controller.init();
    });
JS;
$this->registerJs($script, yii\web\View::POS_READY);

?>

<div id='man_evento_view_seguimientos' class="row">    
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="row">
                <div class="col-sm-8">
                    <strong>Seguimientos</strong>
                </div>
                
                <div class="col-sm-4">
                    <p>
                    <?= Html::a('Nuevo Seguimiento', '',//
                            ['id' => 'newSeguimientojs',//only to js
                            'class' => 'btn btn-default',
                            'data-toggle' => 'modal',
                            'data-target' => '#modal',
                            'data-url' => Url::to(['newseguimiento','man_evento_id'=>$model->id]),//at the view
                            'data-pjax' => '0', ]); ?>         
                </p>
                </div>
            </div>
        </div>
        
        <div class="panel-body" id="detalle"></div>
        <hr />
        
        <div id="form_container"></div>
        
        <div id="report_viewer_container">
            <iframe id="report_viewer" style="width: 100%; height: 100%"></iframe>
        </div>
        
    </div>    
</div>
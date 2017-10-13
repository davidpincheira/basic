<?php
use yii\helpers\Html;
use yii\helpers\Url; 


$url_detalle = Url::to(['index-seguimientos-for-evento-ajax', 'id'=>$model->id]);
$url_eliminar = Url::to(['eliminar-seguimiento-ajax']);
    $script = <<< JS
    var man_evento_view_detalle_controller = {
        contenedor_id: 'man_evento_view_seguimientos',
        detail_url: '$url_detalle',
        delete_url: '$url_eliminar',
        form_container: null,
        report_viewer_container: null,
        report_viewer: null,
            
        delete: function (id) {
            var controller = this;
            if (confirm("Esta seguro de Borrar el Seguimiento id: " + id + "?")) {
                $.post( controller.delete_url + '&id=' + id).done(function (data) {
                    if (!data) {console.log('estamos aca!');
                        controller.recargarDetalle();
                    } else {
                        alert("Error: " + data);
                    }
                }).error(function (error) {
                    alert("No se pudo eliminar el registro " + error.responseText);
                });
            }
        },
                
        recargarDetalle: function () {
            var controller = this;
            $.get(controller.detail_url).done(function (data) {
                $("#" + controller.contenedor_id + " #detalle").html(data);
                $("#" + controller.contenedor_id + " #detalle button[data-action='delete']").click(function (ev) {
                        ev.preventDefault();
                        controller.delete($(this).attr('data-man-evento-seguimiento-id'));
                    });
                
            }).error(function (e) {
                alert("Problemas al cargar el detalle para el paciente");
            });
        },
        init: function () {
            var controller = this;
            controller.recargarDetalle();   }
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
                    <?= Html::a('Nuevo Seguimiento', '',
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
        
        
        
    </div>    
</div>
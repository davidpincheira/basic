<?php
    $script = <<< JS
    var man_evento_view_detalle_controller = {
        contenedor_id: 'man_evento_view_seguimientos',
        detail_url: '<?php $url = Url::to(['indexSeguimientosForEventoAjax', array('id' =>$model->id)]); ?>',
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
$this->registerJs($script, View::POS_END);
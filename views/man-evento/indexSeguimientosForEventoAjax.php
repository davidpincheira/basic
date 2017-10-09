
<?php if (sizeof($modelos)): ?>
    <?php foreach ($modelos as $modelo): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-4">
                        <strong>Fecha: </strong><?php echo $modelo->fecha; ?>
                    </div>
                    <div class="col-sm-4">
                        <strong>Usuario: </strong><?php echo $modelo->cli_profesional_actuante?$modelo->cli_profesional_actuante->nombre:$modelo->cli_profesional_actuante_id; ?>
                    </div>                       
                    <div class="col-sm-4" id="acciones">
                        <button type="button" class="btn btn-default" aria-label="Left Align" data-action="update" title="Editar" data-man-evento-seguimiento-id="<?php echo $modelo->id; ?>">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-default" aria-label="Left Align" data-action="delete" title="Eliminar" data-man-evento-seguimiento-id="<?php echo $modelo->id; ?>">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </div>                
                </div>
            </div>
            <div class="panel-body">
                <div>
                    <div class="col-xs-12">
                        <strong>Descripcion:</strong>
                        <?php echo $modelo->descripcion; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>    
<?php else: ?>
    <div class='panel panel-default'>
        <div class='panel-heading'>
            <strong>No existen Seguimientos</strong>
        </div>
    </div>
<?php endif; ?>